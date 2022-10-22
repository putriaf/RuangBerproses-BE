<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasBerproses extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function regKelasBerproses()
    {
        return $this->hasMany(RegistrationKelasBerproses::class, 'kb_id', 'id');
    }
}