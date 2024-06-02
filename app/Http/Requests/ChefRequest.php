<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChefRequest extends FormRequest
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
            $image =  "image|required";
        }
        if (request()->isMethod('put')) {
            $image = "image|nullable";
        }
        return [
            'name' => "string|required",
            'job_title' => "string|required",
            'image' => $image
        ];
    }
}
