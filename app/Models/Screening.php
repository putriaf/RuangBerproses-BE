<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regProfessionalCounseling()
    {
        return $this->hasMany(RegistrationProCounseling::class);
    }

    public function regPeerCounseling()
    {
        return $this->hasMany(RegistrationPeerCounseling::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}