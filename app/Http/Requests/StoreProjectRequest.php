<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required |max:150',
            'title_en' => 'required |max:150',
            'main_image' => 'nullable |image |mimes:png,jpg',
            'service_id' => 'required |exists:services,id',
            'gallery' => 'nullable |array ',
            'during_date' => 'nullable |date',
            'description' => 'nullable |max:500',
            'description_en' => 'nullable |max:500',
        ];
    }
}
