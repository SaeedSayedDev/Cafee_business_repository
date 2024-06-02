<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
                'location' => 'string',
                'open_days' => 'string',
                'open_hours' => 'string',
                'email1' => 'string',
                'email2' => 'string',
                'phone1' => 'string',
                'phone2' => 'string',
            ];
        }
        if (request()->isMethod('put')) {
            return [
                'location' => 'string',
                'open_days' => 'string',
                'open_hours' => 'string',
                'email1' => 'string',
                'email2' => 'nullable|string',
                'phone1' => 'string',
                'phone2' => 'nullable|string',
            ];
        }
    }
}
