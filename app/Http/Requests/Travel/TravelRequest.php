<?php

namespace App\Http\Requests\Travel;

use Illuminate\Foundation\Http\FormRequest;

class TravelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'is_public' => ['boolean'],
            'name' => ['required', 'string', 'unique:travels'],
            'description' => ['required', 'string'],
            'number_of_days' => ['required', 'integer'],
        ];
    }
}
