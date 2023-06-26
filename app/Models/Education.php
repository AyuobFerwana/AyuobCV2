<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable=[
        'expertise_en',
        'educaName_en',
        'link_en',
        'year_en',
        'summernote_en',

        'expertise_ar',
        'educaName_ar',
        'link_ar',
        'year_ar',
        'summernote_ar',

    ];
}
