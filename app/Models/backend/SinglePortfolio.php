<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinglePortfolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'technolgy',
        'category',
        'photo',
       
    ];
}
