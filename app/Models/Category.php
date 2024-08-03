<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'user_id'];


    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function donationItems()
    {
        return $this->hasMany(DonationItem::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
