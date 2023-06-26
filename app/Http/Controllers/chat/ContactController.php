<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Inbox
    public function contactBox(){
        $messages = Message::with('contact')->paginate(10);
        return response()->view('dashboard.contact.contactBox' , compact('messages'));

    }

    //Read Message
    public function readMess(Message $message){
        return response()->view('dashboard.contact.read-mess' , compact('message'));
    }

    // Delete Message

    public function destroy(Request $request){
        $messageIds = explode(',', $request->input('message_ids'));

        // Delete the messages based on the IDs
        Message::whereIn('id', $messageIds)->SoftDeletes();

        return response()->json(['message' => 'Messages deleted successfully']);
    }
}
