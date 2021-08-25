<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        if(request()->type == "webinar" || request()->type == "virtual" ){
            $rule = [
                'type' => ['bail','required','alpha', 'max:255', 'min:3'],
                'title' => ['bail','required','alpha_spaces', 'max:255', 'min:3'],
                'presenter_name' => ['bail','required','alpha_spaces', 'max:255', 'min:3'],
                'description' => ['bail','required','string', 'max:255', 'min:3'],
                'date_from' => ['bail', 'required', 'date', 'max:255', 'min:3', 'after_or_equal:now'],
                'date_to' => ['bail', 'required', 'date', 'max:255', 'min:3', 'after_or_equal:date_from'],
                'time' => ['bail', 'required', 'date_format:H:i', 'max:255', 'min:3'],
                'location' => ['bail', 'required', 'string', 'max:255', 'min:3'],
                'tag' => ['bail', 'required', 'string', 'max:255', 'min:3'],
                'url' => ['bail', 'required', 'url', 'max:255', 'min:3'],
                'event_attachment' => ['bail', 'required', 'image', 'mimes:jpeg,png,jpg','max:51200'],
            ];
        } else {
            $rule = [
                'type' => ['bail','required','alpha', 'max:255', 'min:3'],
                'title' => ['bail','required','alpha_spaces', 'max:255', 'min:3'],
                'description' => ['bail','required','string', 'max:255', 'min:3'],
                'event_video' => ['bail', 'required', 'mimes:mp4,flv,mkv,3gp,mov,ogg,avi,wmv','max:51200'],
            ];
        }

        return $rule;
    }

      /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'event_attachment.required' => 'Image is required!',
        ];
    }
}
