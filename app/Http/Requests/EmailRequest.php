<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
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
            'emailRecipient' => 'required|min:6|max:255',
            'emailBcc' => 'required|min:6|max:255',
            'emailCc' => 'required|min:6|max:255',
            'emailSubject' => 'required|min:6|max:255',
            'emailBody' => 'required|min:6|max:255',
        ];
    }
}
