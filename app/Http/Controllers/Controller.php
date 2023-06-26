<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // MessagePusher
    public static function successResponse(string $message_en = 'Operation Ran Successfully!', string $message_ar = 'تمت العملية بنجاح')
    {
        return response()->json([
            'message' => App::isLocale('en') ? $message_en : $message_ar,
        ], Response::HTTP_OK);
    }

    public static function errorResponse(string $message_en = 'Something went wrong, Please try again.', string $message_ar = 'حذث خلل ما, يرجى المحاولة مرة أخرى')
    {
        return response()->json([
            'message' => App::isLocale('en') ? $message_en : $message_ar,
        ], Response::HTTP_BAD_REQUEST);
    }

    public static function createAbout(string $message = 'Create About Successfully!'){
        return response()->json([
            'message'=> $message
        ],Response::HTTP_OK);
    }

    public static function failedAbout(string $message = 'Create About Failed !'){
        return response()->json([
            'message'=> $message
        ],Response::HTTP_BAD_REQUEST);
    }



    public static function updatedAbout(string $message = 'Updated About Successfully!'){
        return response()->json([
            'message'=> $message
        ],Response::HTTP_OK);
    }

    public static function updatedFailedAbout(string $message = 'Update About Failed !'){
        return response()->json([
            'message'=> $message
        ],Response::HTTP_BAD_REQUEST);
    }






}


