<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:catalog|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Catalog name is required',
            'name.unique' => 'Catalog: '. $this->request->get('name') . " is exist",
            'name.max' => 'Name must be length from 1 to 20 characters'
        ];
    }
}
