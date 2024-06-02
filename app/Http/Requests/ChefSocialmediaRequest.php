<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefSocialmediaRequest extends FormRequest
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
                'facebook' => 'string|nullable',
                'instagram' => 'string|nullable',
                'twitter' => 'string|nullable',
                'tiktok' => 'string|nullable',
                'chef_id' => 'integer|required',
            ];
        }
        if (request()->isMethod('put')) {
            return [
                'facebook' => 'string|nullable',
                'instagram' => 'string|nullable',
                'twitter' => 'string|nullable',
                'tiktok' => 'string|nullable',
            ];
        }
    }
}
