<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;
use App\Models\User;
use App\Models\DonationItem;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    private $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function store(Request $request, $donationItem_id){

        $request->validate(
            [
                'comment_body' . $donationItem_id => 'required|max:150'
            ],
            [
                'comment_body' . $donationItem_id . '.required' => 'You cannot submit an empty comment.',
                'comment_body' . $donationItem_id . '.max' => 'The comment must not be greater than 150 characters.'
            ]
        );
    
        $this->comment->body = $request->input('comment_body' . $donationItem_id);
        $this->comment->user_id = Auth::user()->id;
        $this->comment->donation_item_id = $donationItem_id; // Updated to use item_id
        $this->comment->save();

        // The information inside this array will be used in the email body.


        // $user = DonationItem::findOrFail($donationItem_id)->user;

        // $details = ['name' => $user->username,
        //             'commented_user' =>  Auth::user()->username,
        //             'comment_body'=> $this->comment->body,
        //             'donagionItem_url' => route('donated.item.show', $donationItem_id) 
        //         ];

        // Send an email to the user.


        // Mail::send('users.emails.comment', $details, function($message) use ($user){
        //     $message
        //         ->from(config('mail.from.address'), config('app.name'))
        //         ->to($user->email, $user->username)
        //         ->subject('You got a comment!');
        // });

        return redirect()->back();
    }

    public function destroy($id){

        $comment = Comment::findOrFail($id);

        if (Auth::user()->id === $comment->user_id) {
            $comment->delete();
            return redirect()->back();
        }
    }
}
