<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\SupportGroup;
use App\Models\PeerCounseling;
use App\Models\KelasBerproses;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = ["id"];

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function regSupportGroup()
    {
        return $this->hasMany(RegistrationSupportGroup::class, 'user_id', 'id');
    }

    public function regPeerCounseling()
    {
        return $this->hasMany(RegistrationPeerCounseling::class, 'user_id', 'id');
    }

    public function regProfessionalCounseling()
    {
        return $this->hasMany(RegistrationProCounseling::class, 'user_id', 'id');
    }

    public function psytalk()
    {
        return $this->hasMany(Psytalk::class, 'user_id', 'id');
    }

    public function kelasBerproses()
    {
        return $this->hasMany(KelasBerproses::class, 'user_id', 'id');
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'user_id', 'id');
    }
}