<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Discussion extends FormRequest
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
        'topic' => 'required|max:300',
        'details' => 'required',
        'option_a' => 'required|max:15',
        'option_b' => 'required|max:15',
        'status' => 'required',
        'amount' => 'required',
        ];
    }
}
