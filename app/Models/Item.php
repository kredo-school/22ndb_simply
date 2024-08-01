<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'category_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // need to decide to use "category" or "categories"
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        $this->belongsTo(Category::class);
    }

    public function donationItems()
    {
        return $this->hasMany(DonationItem::class);
    }

}
