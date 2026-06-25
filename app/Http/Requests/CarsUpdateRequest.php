<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        $car = $this->route('car');

        return [
            'name' => 'required|string|min:2|max:100|unique:cars,name,'.$car->id,
            'merk' => 'required|string|min:2|max:100',
        ];
    }
}
