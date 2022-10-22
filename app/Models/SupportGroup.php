<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\RegistrationSupportGroup;

class SupportGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regSupportGroup()
    {
        return $this->hasMany(RegistrationSupportGroup::class, 'procounseling_id', 'id');
    }
}