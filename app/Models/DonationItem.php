<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
