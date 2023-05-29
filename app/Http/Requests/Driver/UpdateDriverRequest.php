<?php

namespace App\Http\Requests\Driver;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDriverRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'year' => ['required', 'numeric', 'between:2010,2024'],
            'make' => ['required'],
            'model' => ['required'],
            'color' => ['required', 'alpha'],
            'license_plate' => ['required'],
            'name' => 'required'
        ];
    }
}
