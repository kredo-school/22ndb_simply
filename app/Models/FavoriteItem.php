<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class FavoriteItem extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $fillable = ['user_id', 'donation_item_id'];

    public function donationItem(){
        return $this->belongsTo(DonationItem::class, 'donation_item_id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
