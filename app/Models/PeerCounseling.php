<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeerCounseling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regPeerCounseling()
    {
        return $this->hasMany(RegistrationPeerCounseling::class, 'procounseling_id', 'id');
    }
}