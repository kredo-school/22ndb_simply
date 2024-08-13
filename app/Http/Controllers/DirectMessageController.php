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
        $all_users = User::where('id', '!=', $sender_id)
                        ->where(function($query) use ($sender_id) {
                            $query->whereHas('directMessages', function($query) use ($sender_id) {
                            $query->where('user_id', $sender_id)
                        ->orWhere('destination_user_id', $sender_id);
                        })
                        ->orWhereHas('receivedMessages', function($query) use ($sender_id) {
                            $query->where('user_id', $sender_id)
                        ->orWhere('destination_user_id', $sender_id);
                        });
                    })->get();

        foreach ($all_users as $user) {
            $user->unread_count = DirectMessage::unreadCount($user->id, $sender_id);
        }

        $messages  = DirectMessage::with('user')->where(function($query) use ($sender_id, $id) {
            $query->where([
                ['user_id', $sender_id],
                ['destination_user_id', $id]
            ])->orWhere([
                ['user_id', $id],
                ['destination_user_id', $sender_id]
            ]);
        })->orderBy('created_at', 'asc')->get();

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
        $directMessage = new DirectMessage;
        $directMessage->text                = $request->text;
        $directMessage->user_id             = Auth::id() ;
        $directMessage->destination_user_id = $recipient_id;
        $directMessage->seen                = false;
        $directMessage->save();

        return redirect()->route('directMessage.show', ['id' => $recipient_id]);
    }
}
