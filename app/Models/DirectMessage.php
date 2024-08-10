<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'destination_user_id',
        'text',
        'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function unreadCount($sender_id, $recipient_id)
    {
        return self::where('user_id', $sender_id)
                        ->where('destination_user_id', $recipient_id)
                        ->where('seen', false)
                        ->count();
    }
}
