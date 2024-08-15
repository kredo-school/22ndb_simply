<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\DirectMessage;
use Illuminate\Support\Facades\Auth;

class DirectMessageController extends Controller
{
    private $DirectMessage;

    public function __construct(DirectMessage $DirectMessage)
    {
        $this->DirectMessage = $DirectMessage;
    }

    public function show($id)
    {
        $sender_id = Auth::id();
        $sender    = User::findOrFail($sender_id);
        $recipient = User::findOrFail($id);

        // get all other users
        $all_users = User::where('id', '!=', $sender_id)
                        ->where(function($query) use ($sender_id) {
                            // find all users who have talked to the sender in their direct or received messages
                            $query->whereHas('directMessages', function($query) use ($sender_id) {
                            $query->where('user_id', $sender_id)
                        ->orWhere('destination_user_id', $sender_id);
                        })
                        ->orWhereHas('receivedMessages', function($query) use ($sender_id) {
                            $query->where('user_id', $sender_id)
                        ->orWhere('destination_user_id', $sender_id);
                        });
                    })
                    ->withMax('directMessages', 'created_at')
                    ->withMax('receivedMessages', 'created_at')
                    ->get();

        // count how many messages the user hasn't read yet
        //
        foreach ($all_users as $user) {
            $user->unread_count = DirectMessage::unreadCount($user->id, $sender_id);
            $user->latest_message_date = max($user->direct_messages_max_created_at, $user->received_messages_max_created_at);
        }

        // Sort users by the latest message date
        $all_users = $all_users->sortByDesc('latest_message_date');

        //  get all messages sent between two specific people, from oldest to newest
        $messages  = DirectMessage::with('user')->where(function($query) use ($sender_id, $id) {
            $query->where([
                        ['user_id', $sender_id],
                        ['destination_user_id', $id]
                    ])->orWhere([
                        ['user_id', $id],
                        ['destination_user_id', $sender_id]
                    ]);
        })->orderBy('created_at', 'asc')->get();

        // if Auth user is the recipient and there are unread messages, they will be marked as read
        // the figure changed 0 to 1
        DirectMessage::where('user_id', $id)
                        ->where('destination_user_id', $sender_id)
                        ->where('seen', false)
                        ->update(['seen' => true]);

        return view('users.directMessage.show')
                ->with('all_users', $all_users)
                ->with('sender', $sender)
                ->with('recipient', $recipient)
                ->with('messages', $messages);
    }

    public function store(Request $request, $recipient_id)
    {
        $directMessage = new DirectMessage();

        $directMessage->user_id             = Auth::id() ;
        $directMessage->destination_user_id = $recipient_id;
        $directMessage->seen                = false;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $directMessage->image = 'images/' . $imageName;
        } else {
            $directMessage->text = $request->text;
        }

        $directMessage->save();

        return redirect()->route('directMessage.show', ['id' => $recipient_id]);
    }
}
