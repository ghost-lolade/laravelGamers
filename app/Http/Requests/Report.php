<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Report extends FormRequest
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
            'user_id' => 'required',
            'refrence_code' => 'required|unique:reports',
            'issues' => 'required|max:255',
            'status' => 'required',
            'date_resolved' => 'required|date'
        ];
    }
}
