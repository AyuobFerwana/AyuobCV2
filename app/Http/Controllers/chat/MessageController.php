<?php

namespace App\Http\Controllers\chat;

use App\Events\ChatSent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Message\StoreMessageRequest;
use App\Models\Message;
use App\Services\MessageService;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Pusher\Pusher;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{
    public function __construct(protected MessageService $service)
    {
    }

    public function chatForm(StoreMessageRequest $request)
    {
        $created = $this->service->createMessage($request->validated());
        return $created ? parent::successResponse() : parent::errorResponse();
    }
}
