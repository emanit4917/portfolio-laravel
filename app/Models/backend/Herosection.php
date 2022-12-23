<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Herosection extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'skill_title',
        'short_desc',
        'photo',
    ];
}
