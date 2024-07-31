<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function donation()
    {
        return $this->belongsTo(DonationItem::class, 'item_id');
    }

    public function isDonated()
    {
        return $this->donation()->where('id', DonationItem::class)->exists();
    }

}
