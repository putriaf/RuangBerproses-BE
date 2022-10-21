<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalCounseling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function professionalCounseling()
    {
        return $this->belongsToMany(RegistrationProCounseling::class);
    }
}