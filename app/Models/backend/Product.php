<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'pro_title',
        'description',
        'technolgy',
        'category',
        'digital',
        'brand_name',
        'pro_photo',
    ];
}
