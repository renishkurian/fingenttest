<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class markFromRequest extends FormRequest
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
            "student_id"=> ['required', 'exists:students,id'],
            "term_id"=> ['required', 'exists:terms,id'],
            "maths"=> ['required', 'numeric',"min:0"],
            "history"=> ['required', 'numeric',"min:0"],
            "science"=> ['required', 'numeric',"min:0"],
            
        ];
    }
}
