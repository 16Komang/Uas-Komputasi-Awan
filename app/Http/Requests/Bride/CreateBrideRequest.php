<?php

namespace App\Http\Requests\Bride;

use Illuminate\Foundation\Http\FormRequest;

class CreateBrideRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
            'father' => 'string|max:255',
            'mother' => 'string|max:255',
        ];
    }
}
