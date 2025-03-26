<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'store_name'=>'required|max:55',
            'store_description'=>'required|min:20',
            'store_category'=>'required',
            'store_image' =>'required',
            'store_followers'=>'required',
            'store_insta'=>'required',
        ];
    }
}
