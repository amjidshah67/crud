<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faqe extends Model
{
    use HasFactory;
    protected $table = 'faqes';
    protected $fillable = [
        'question',
        'answer',
    ];
}
