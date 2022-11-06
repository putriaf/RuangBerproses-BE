<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationPeerCounseling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peerCounseling()
    {
        return $this->belongsTo(PeerCounseling::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function screening()
    {
        return $this->belongsTo(Screening::class);
    }
}