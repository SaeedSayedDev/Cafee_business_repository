<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'card_name' => 'required|string|min:3|max:50',
            'card_number' => 'required|string|min:16|max:16',
            'cvc' => 'required|string|min:3|max:4',
            'exp_month' => 'required|string|date_format:m',
            'exp_year' => "required|string|date_format:Y",
            'quantity' => "array|required",
            'quantity.*' => "required|integer|min:1|max:100",
        ];
    }
}
