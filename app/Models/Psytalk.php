<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\User;

class Psytalk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regPsytalk()
    {
        return $this->hasMany(RegistrationPsytalk::class, 'psytalk_id', 'id');
    }
}