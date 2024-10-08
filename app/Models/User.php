<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function donationItems()
    {
        return $this->hasMany(DonationItem::class);
    }

    public function favoriteItems() {
        return $this->hasMany(FavoriteItem::class);
    }


    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function mycategories()
    {
        return $this->categories()->where('user_id', Auth::user()->id)->exists();
    }

    public function directMessages()
    {
        return $this->hasMany(DirectMessage::class);
    }

    public function receivedMessages()
    {
        return $this->hasMany(DirectMessage::class, 'destination_user_id');
    }
}
