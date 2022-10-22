<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalCounseling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regProfessionalCounseling()
    {
        return $this->hasMany(RegistrationProCounseling::class, 'procounseling_id', 'id');
    }
}