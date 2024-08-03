<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;


class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'category_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function donation()
    {
        return $this->hasOne(DonationItem::class);
    }

    public function isDonated()
    {
        return $this->donation()->where('item_id', $this->id)->exists();
    }

    public function donationItems()
    {
        return $this->hasMany(DonationItem::class);
    }

}
