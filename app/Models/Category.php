<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function Item()
    {
        return $this->hasMany(Item::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function donationItems()
    {
        return $this->hasMany(DonationItem::class);
    }
}
