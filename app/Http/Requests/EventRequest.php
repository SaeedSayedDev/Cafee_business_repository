<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
                'event_name' => "string|required",
                'event_price' => "string|required",
                'event_image' => "image|required",
                'event_desc_top' => "string|required",
                'event_desc_bottom' => "string|required",
            ];
        }
        if (request()->isMethod('put')) {
            return [
                'event_name' => "string|required",
                'event_price' => "string|required",
                'event_image' => "image|nullable",
                'event_desc_top' => "string|required",
                'event_desc_bottom' => "string|required",
            ];
        }
    }
}
