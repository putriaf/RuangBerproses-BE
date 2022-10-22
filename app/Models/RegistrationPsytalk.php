<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationPsytalk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function psytalk()
    {
        return $this->belongsTo(Psytalk::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}