<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Globals extends Model
{
    use HasFactory;
    protected $fillable = [
        'global_title',
        'global_desc',
    ];
}
