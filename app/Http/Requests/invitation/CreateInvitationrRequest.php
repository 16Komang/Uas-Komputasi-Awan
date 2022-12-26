<?php

namespace App\Http\Requests\invitation;

use Illuminate\Foundation\Http\FormRequest;

class CreateInvitationrRequest extends FormRequest
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
            'template_id' => 'required|int|max:25',
            'user_id' => 'required|int|max:25',
            'rekening' => 'string|max:70',
            'date' => 'required|date|max:255',
            'time_start' => 'required|time|max:255',
            'time_end' => 'required|time|max:255'
        ];
    }
}
