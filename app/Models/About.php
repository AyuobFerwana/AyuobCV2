<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    const Image_Url = '/dash/dist/img/ayoub.png';
    protected $fillable = [
        'super_en',
        'super_ar',

        'expertise_en',
        'expertise_ar',

        'address',
        'phone',
        'email',
        'program',
        'file',
        'image',


    ];
}
