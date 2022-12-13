<?php

namespace App\Models;

use App\Mail\RegConfirmationMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

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

    public function counselor()
    {
        return $this->belongsTo(Counselor::class);
    }

    public static function boot()
    {
        parent::boot();
        static::created(function ($item) {
            $adminEmail = "akunbuatcamped@gmail.com";
            Mail::to($adminEmail)->send(new RegConfirmationMail($item));
        });
    }
}