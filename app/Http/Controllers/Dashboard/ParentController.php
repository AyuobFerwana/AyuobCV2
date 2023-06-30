<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Message;

class ParentController extends Controller
{

    // public function show(){
    //     return response()->view('dashboard.parent');
    // }

    public function messageNav()
    {

        $about = About::first();
        $messages = Message::latest()->limit(3)->get();
        return response()->view('dashboard.parent', compact('messages', 'about'));
    }
}
