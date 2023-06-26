<?php

namespace App\Services;

use App\Events\NewMessageEvent;
use App\Models\Message;
use Exception;

class MessageService
{
  public function createMessage(array $data)
  {
    try {
      $message = new Message($data);
      $isSaved = $message->save();
      if ($isSaved) event(new NewMessageEvent($message));
      return $isSaved;
    } catch (Exception $ex) {
      return false;
    }
  }
}
