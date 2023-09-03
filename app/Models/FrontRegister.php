<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontRegister extends Model
{
    use HasFactory;
    protected $table = "front_registers";
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
