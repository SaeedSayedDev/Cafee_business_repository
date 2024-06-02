<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DishSpecialRequest extends FormRequest
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
                'dish_name' => 'string|required|max:100',
                'dish_title' => 'string|required|max:400',
                'dish_desc_top' => 'string|required',
                'dish_desc_bottom' => 'string|required',
                'dish_image' => 'required|image',
            ];
        }
        if (request()->isMethod('put')) {
            return [
                'dish_name' => 'string|required|max:100',
                'dish_title' => 'string|required|max:400',
                'dish_desc_top' => 'string|required',
                'dish_desc_bottom' => 'string|required',
                'dish_image' => 'nullable|image',
            ];
        }
    }
}
