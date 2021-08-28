<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\gender;
class StoreStudentRequest extends FormRequest
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
            "name"=> ['required', 'regex:/^[\pL\s\-]+$/u', 'max:100'],
            "age"=> ['required', 'numeric','between:1,100'],
             "gender"=>['required',new gender]
        ];
    }
}
