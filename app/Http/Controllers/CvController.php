<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\ProSkill;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class CvController extends Controller
{
    public function show()
    {
        $about = About::first();
        $skills = Skill::all();
        $proSkills = ProSkill::all();
        $education = Education::all();
        return response()->view('cv.template', compact('about', 'skills', 'proSkills' , 'education'));
    }
}
