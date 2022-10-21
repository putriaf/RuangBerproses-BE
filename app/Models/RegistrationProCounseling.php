<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationProCounseling extends Model
{
    use HasFactory;

    public function regprofessionalCounseling()
    {
        return $this->belongsTo(ProfessionalCounseling::class);
    }

    public function professionalCounseling()
    {
        return $this->belongsTo(User::class);
    }
}