<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuItemRequest extends FormRequest
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
    protected function onCreate(){
        return [
            'name' => 'string|required|unique:menu_item,name',
            'price'=>'string|required',
            'description' => 'string|required',
            'category_id' => 'integer|required'
        ];
    }
    protected function onUpdate(){
        return [
            'name' => 'string|required|unique:menu_item,name,'. request()->route('id'),
            'price'=>'string|required',
            'description' => 'string|required',
            'category_id' => 'integer|required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return request()->isMethod('post') ? $this->onCreate() : $this->onUpdate();
      
    }
}
