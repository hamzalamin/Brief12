<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecettesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'name' => 'required|min:5',
            'description' => 'required|min:30',
            // 'image' => 'required|image',
            'category_id' => 'required',


        ];
        if($this->route()->getActionMethod() === 'store'){
            $rules['image'] = 'required|image';
        }
        if($this->route()->getActionMethod() === 'update'){
            $rules['image'] = 'required|image';
        }
        // return [
        //     'name' => 'required|min:5',
        //     'description' => 'required|min:30',
        //     'image' => 'required|image',
        //     'category_id' => 'required',


        // ];
        return $rules;
    }
}
