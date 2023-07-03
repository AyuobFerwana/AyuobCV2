<?php

namespace App\Http\Controllers\chat;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    // Inbox
    public function contactBox()
    {
        $messages = Message::with('contact')->paginate(10);
        return response()->view('dashboard.contact.contactBox', compact('messages'));
    }

    //Read Message
    public function readMess(Message $message)
    {
        return response()->view('dashboard.contact.read-mess', compact('message'));
    }

    // Delete Message

    public function destroy(Request $request)
    {
        // Find the row with the specified ID
        $ids = $request->input('ids');

        $isDeleted = Message::whereIn('id', $ids)->delete();

        return response()->json(
            ['message' => $isDeleted ? 'Deleted Successfully!' : 'Delete Failed!'],
            $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
        );
    }

    public function destroyAll()
    {
    //  $isDeleted =  Message::getQuery()->delete();
    //     return response()->json(
    //         ['message' => $isDeleted ? 'Deleted all Successfully!' : 'Deleted all Failed!'],
    //         $isDeleted ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST
    //     );
    }
}
