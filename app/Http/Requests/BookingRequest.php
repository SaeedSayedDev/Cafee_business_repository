<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
class BookingRequest extends FormRequest
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
            'name' => ['string', 'required', 'min:3', 'max:20'],
            'email' => ['email', 'required', 'min:10', 'max:30'],
            'phone' => ['string', 'required', 'min:11', 'max:11'],
            'ofPeople' => ['integer', 'required', 'max:6'],
            'startDateTime' => ['required', 'date', new DateBetween, new TimeBetween],
            'table_id' => ['integer', 'required', 'exists:tables,id'],
            'message' => ['string', 'max:1000', 'nullable'],
            'menu_id' => ['array','required'],
            'menu_id.*' => ['required','integer'],
        ];
    }
}
