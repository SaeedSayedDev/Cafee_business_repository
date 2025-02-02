<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
        if (request()->isMethod('post')) {
            return [
                'name' => 'string|required',
                'email' => 'email|required',
                'password' => 'string|required|confirmed'
            ];
        }
        if (request()->isMethod('put')) {
            return [
                'name' => 'string',
                'email' => 'email',
            ];
        }
    }
}
