<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuCategoryRequest extends FormRequest
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

    protected function onCreate()
    {
        return [
            'name' => 'required|string|min:3|unique:menu_category,name'
        ];
    }

    protected function onUpdate()
    {
        return [
            'name' => 'required|string|min:3|unique:menu_category,name,' .request()->route('id')
        ];
    }

    public function rules()
    {
        return request()->isMethod('post') ? $this->onCreate() : $this->onUpdate();
    }
}
