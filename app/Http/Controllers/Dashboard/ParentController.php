<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ParentController extends Controller
{

    // public function show(){
    //     return response()->view('dashboard.parent');
    // }

    public function messageNav(){

        $messages = Message::latest()->take(3)->get()->reverse();;
        return response()->view('dashboard.parent' , compact('messages'));
    }
}
