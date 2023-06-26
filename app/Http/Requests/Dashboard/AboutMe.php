<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AboutMe extends FormRequest
{
    public function rules(): array
    {
        return [
            'super_en'=>'required|string|min:3',
            'super_ar'=>'required|string|min:3',

            'expertise_en'=>'required|string|min:3',
            'expertise_ar'=>'required|string|min:3',

            'address'=>'required|string|min:3',
            'phone'=>'required|string|min:10',
            'email'=>'required|email:filter',
            'program'=>'required|string',
            'file'=>'required|file|mimes:pdf,docx,rar,zip|max:50000',
            'image'=>'required|file|mimes:png,jpg,jpeg|max:500000',

        ];
    }
}
