<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakage extends Model
{
    use HasFactory;
    protected $table = 'pakages';
    protected $fillable = [
        'heading',
        'title',
        'slug',
        'description',
        'status',
    ];
}
