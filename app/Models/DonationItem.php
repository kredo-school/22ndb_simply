<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class DonationItem extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function favorites()
    {
        return $this->hasMany(FavoriteItem::class);
    }

    public function isFavorited()
    {
        return $this->favorites()->where('user_id', Auth::user()->id)->exists();
    }
}
