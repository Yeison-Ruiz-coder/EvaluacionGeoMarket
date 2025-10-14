<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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

    public function rol()
    {
        return $this->belongsTo(Roles::class);
    }
    public function seller()
    {
        return $this->hasMany(Sellers::class);
    }

    public function chatsSupports()
    {
        return $this->hasMany(ChatsSupport::class);
    }

    public function image()
    {
        return $this->hasMany(Images::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaints::class);
    }

    public function publications_users()
    {
        return $this->hasMany(PublicationsUsers::class);
    }
}
