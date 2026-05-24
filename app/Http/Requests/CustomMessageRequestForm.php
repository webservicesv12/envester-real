<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomMessageRequestForm extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject' => ['required'],
            'type' => ['required'],
            'receiver_email' => ['required'],
            'message' => ['required'],
        ];
    }
}
