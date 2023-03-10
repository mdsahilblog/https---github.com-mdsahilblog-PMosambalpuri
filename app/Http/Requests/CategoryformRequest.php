<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryformRequest extends FormRequest
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
            //rules for category form
            'name'=>[
                'required',
                'string'
            ],
            'slug'=>[
                'required',
                'string'
            ],
            'description'=>[
                'required',
            ],
            'image'=>[
                'nullable',
                'mimes:jpg,png,jpeg'
            ],
            'meta_title'=>[
                'required',
                'string'
            ],
            'meta_keyword'=>[
                'required',
                'string'
            ],
            'meta_description'=>[
                'required',
                'string'
            ],
        ];
    }
}
