<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nisn',
        'school',
        'classroom',
        'gender',
        'date_of_birth',
        'no_hp'
    ];
}
