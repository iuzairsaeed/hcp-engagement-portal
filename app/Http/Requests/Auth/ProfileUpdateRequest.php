<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            // PROFILE ARRAY CHECK
            'name' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'email' => ['bail', 'required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','regex:/[0-9+*-*]/'],
            'pmdc' => ['required','regex:/[0-9+*-*]/'],
            'speciality' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'location' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'clinic_name' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'clinic_address' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'avatar' => ['required', 'image', 'mimes:jpg,jpeg,png|max:2048'],
            // EDUCATION ARRAY CHECK
            'education.*.level' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.type' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.field' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.school' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.country' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.city' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.currently_here' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.*.date_from' => ['bail', 'date', 'max:255', 'min:3'],
            'education.*.date_to' => ['bail', 'date', 'max:255', 'min:3'],
            // EXCPERIENCE ARRAY CHECK
            'experience.*.title' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.organization' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.therapeutic_area' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.country' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.city' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.currently_here' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.*.date_from' => ['bail', 'date', 'max:255', 'min:3'],
            'experience.*.date_to' => ['bail', 'date', 'max:255', 'min:3'],
            
        ];
    }
}
