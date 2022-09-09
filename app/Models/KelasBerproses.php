<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasBerproses extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelasBerproses()
    {
        return $this->belongsToMany(User::class);
    }
}
