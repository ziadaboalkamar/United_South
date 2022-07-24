<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAboutUsRequest extends FormRequest
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
            'about_us' => 'required |max:500',
            'about_us_en' => 'required |max:500',
            'vision' => 'required |max:500',
            'vision_en' => 'required |max:500',
            'target' => 'required |max:500',
            'target_en' => 'required |max:500',
            'message' => 'required |max:500',
            'message_en' => 'required |max:500',

        ];
    }
}
