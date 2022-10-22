<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationSupportGroup extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function supportGroup()
    {
        return $this->belongsTo(SupportGroup::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}