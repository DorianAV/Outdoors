<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeDetailsRequest extends FormRequest
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
        return [
            'title' => ['required', 'string', 'max:255'],
            'subtitle1' => ['required', 'string', 'max:255'],
            'description1' => ['required', 'string', 'max:1500'],
            'subtitle2' => ['required', 'string', 'max:255'],
            'description2' => ['required', 'string', 'max:1500'],
            'subtitle3' => ['required', 'string', 'max:255'],
            'description3' => ['required', 'string', 'max:1500'],
            'subtitle4' => ['required', 'string', 'max:255'],
            'description4' => ['required', 'string', 'max:1500'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'videoUrl' => ['nullable', 'string'],

        ];
    }
}
