<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectStationRequest extends FormRequest
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

            'research' => 'nullable |max:500',
            'research_en' => 'nullable |max:500',
            'research_img' => 'nullable |image |mimes:png,jpg',

            'wireframe' => 'nullable |max:500',
            'wireframe_en' => 'nullable |max:500',
            'wireframe_img' => 'nullable |image |mimes:png,jpg',

            'design' => 'nullable |max:500',
            'design_en' => 'nullable |max:500',
            'design_img' => 'nullable |image |mimes:png,jpg',

            'development' => 'nullable |max:500',
            'development_en' => 'nullable |max:500',
            'development_img' => 'nullable |image |mimes:png,jpg',

            'testing' => 'nullable |max:500',
            'testing_en' => 'nullable |max:500',
            'testing_img' => 'nullable |image |mimes:png,jpg',

        ];
    }
}
