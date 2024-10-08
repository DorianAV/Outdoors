<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if (config('app.debug') == false){
            $captcha= ['required', 'captcha'];
        }else{
            $captcha=['nullable'];
        }

        return [
            'question' => ['required', 'string', 'max:1000'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/^\+?\d{1,3}?[-.\s]?(\(?\d{1,4}\)?)[-.\s]?\d{1,4}[-.\s]?\d{1,9}$/'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'g-recaptcha-response' => $captcha,
        ];
    }
}
