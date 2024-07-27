<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function categories()
    {
        $this->belongsTo(Category::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
