<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\User;

class Psytalk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function psytalk()
    {
        return $this->belongsToMany(User::class);
    }
}
