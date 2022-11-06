<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationProCounseling extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function professionalCounseling()
    {
        return $this->belongsTo(ProfessionalCounseling::class);
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