<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProSkill extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'skills',
    ];
}
