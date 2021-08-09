<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'type' => ['bail','required','alpha_spaces', 'max:255', 'min:3'],
            'activity_image' => ['bail', 'required', 'image', 'mimes:jpg,jpeg,png|max:2048'],
            'title' => ['bail','required','alpha_spaces', 'max:255', 'min:3'],
            'description' => ['bail','required','string', 'max:255', 'min:3'],
            'activity_doc' => ['bail', 'required', 'mimes:pdf,ppt', 'mimes:jpg,jpeg,png|max:2048'],
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'activity_doc.required' => 'Document file is required!',
            'activity_doc.mimes' => 'Invalid Attachment'
        ];
    }
}
