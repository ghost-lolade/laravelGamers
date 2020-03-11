<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Wallet extends FormRequest
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
            'card_no' => 'required',
            'card_exp_date' => 'required',
            'cvv' => 'required',
            'amount' => 'required',
            'total_amount' => 'required'
        ];
    }
}
