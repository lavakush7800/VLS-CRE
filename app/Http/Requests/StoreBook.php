<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'title' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg',
            'price' => 'required|numeric',
            'year' => 'required',
            'page' => 'required|numeric',
            'qty' => 'required|numeric',
            'description' => 'required',
            'author_id' => 'required',
            'publisher_id' => 'required', 
            'category_id' => 'required', 
        ];
    }
    public function messages(){
        return [
           
 
        ];
    }
}
