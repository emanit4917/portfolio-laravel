<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_name',
        'desc',
        'title_grate',
        'photo_thum',
        'photo',
    ];
}
