<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'user_id', 'item_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function item(){
        return $this->belongsTo(DonationItem::class, 'item_id'); 
    }
}
