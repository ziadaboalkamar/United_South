<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServiceRequest extends FormRequest
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
            'name' => 'required |max:50',
            'name_en' => 'required |max:50',
            'image' => 'nullable |image |mimes:png',
            'description' => 'nullable |max:1000',
            'description_en' => 'nullable |max:1000',
        ];
    }
}
