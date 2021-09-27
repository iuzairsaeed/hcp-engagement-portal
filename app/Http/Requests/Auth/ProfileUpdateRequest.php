<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\MatchOldPassword;

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
        if($this->old_password != null && $this->password  ){
            $rule = [
                'old_password' => ['bail', 'required', new MatchOldPassword],
                'password' => ['bail', 'required', 'string', 'min:8', 'different:old_password'],
            ];
            return $rule;
        }
        $rule = [
            // PROFILE ARRAY CHECK
            'name' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'email' => ['bail', 'email', 'max:255'],
            'phone' => ['required','regex:/[0-9+*-*]/'],
            'pmdc' => ['required','regex:/[0-9+*-*]/'],
            'speciality' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'location' => ['bail', 'string', 'max:255', 'min:3'],
            'clinic_name' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'clinic_address' => ['bail', 'required', 'string', 'max:255', 'min:3'],
            'avatar' => ['image', 'mimes:jpg,jpeg,png|max:2048'],
            // EDUCATION ARRAY CHECK
            'education.level.*' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.type.*' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.field.*' => ['bail', 'required', 'alpha_spaces', 'max:255', 'min:3'],
            'education.school.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.country.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.city.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'education.currently_here.*' => ['bail', 'boolean'],
            'education.date_from.*' => ['bail', 'date', 'max:255', 'min:3'],
            'education.date_to.*' => ['bail', 'date', 'max:255', 'min:3'],
            // EXCPERIENCE ARRAY CHECK
            'experience.title.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.organization.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.therapeutic_area.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.country.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.city.*' => ['bail', 'alpha_spaces', 'max:255', 'min:3'],
            'experience.currently_here.*' => ['bail', 'boolean'],
            'experience.date_from.*' => ['bail', 'date', 'max:255', 'min:3'],
            'experience.date_to.*' => ['bail', 'date', 'max:255', 'min:3'],
        ];
        return  $rule;
    }
}
