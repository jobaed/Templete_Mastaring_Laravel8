<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use App\Rules\StrongPassword;
use Illuminate\Foundation\Http\FormRequest;

class ProductFromRequest extends FormRequest
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
            'name'        => ['required', 'string', new Uppercase(), 'unique:product,name'],
            'title'       => ['required', 'string'], // Arraay (array best Practrice)
            // 'pass'        => ['required', new StrongPassword],
            'code'        => 'required|integer|min:1|unique:product,code',
            'qty'         => 'required|integer|min:1',
            'category_id' => 'required|numeric|min:1',
            'brand'       => 'required|numeric|min:1',
        ];
    }
    public function message()
    {
        [
            'qty.required' => 'The Quantity Fild Are Required',
            'qty.min:1'    => 'The Quantity Must Be Minimum 1',
        ];
    }
}
