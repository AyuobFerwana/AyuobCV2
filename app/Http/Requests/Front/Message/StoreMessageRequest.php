<?php

namespace App\Http\Requests\Front\Message;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:150',
            'last_name' => 'required|string|max:150',
            'email' => 'required|email:filter',
            'message' => 'required|string|max:1000',
        ];
    }
}
