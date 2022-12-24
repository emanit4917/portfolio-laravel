<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocailInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'cont_address',
        'cont_social',
       
    ];
}
