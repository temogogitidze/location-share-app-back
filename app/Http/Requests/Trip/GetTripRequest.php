<?php

namespace App\Http\Requests\Trip;

use Illuminate\Foundation\Http\FormRequest;

class GetTripRequest extends FormRequest
{
    public function authorize(): bool
    {
        $trip = $this->route('trip');
        $user = $this->user();

        if ($trip->user->id === $user->id && $trip->driver->id === $user->driver->id) {
            return true;
        }

        return false;
    }
    public function rules(): array
    {
        return [

        ];
    }
}
