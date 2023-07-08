<?php

namespace App\Http\Requests\Tour;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ToursListRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'priceFrom' => ['numeric'],
            'priceTo' => ['numeric'],
            'dateFrom' => ['date'],
            'dateTo' => ['date'],
            'sortBy' => ['string', Rule::in(['price'])],
            'sortOrder' => ['string', Rule::in(['asc', 'desc'])],
        ];
    }

    public function messages(): array
    {
        return [
            'sortBy' => "The 'sortBy' field only accepts 'price' value",
            'sortOrder' => "The 'sortOrder' field only accepts 'asc' and 'desc' values",
        ];
    }
}
