<?php

namespace App\Http\Requests\House;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property-read int $limit
 * @property-read int $page
 * @property-read string $name
 * @property-read int $price_from
 * @property-read int $price_to
 * @property-read int $bedrooms
 * @property-read int $bathrooms
 * @property-read int $storeys
 * @property-read int $garages
 * @property-read string $order_by
 * @property-read string $sort_type
 */
class HouseIndexRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|max:100',
            'price_from' => 'integer',
            'price_to' => 'integer',
            'bedrooms' => 'integer',
            'bathrooms' => 'integer',
            'storeys' => 'integer',
            'garages' => 'integer',
        ];
    }
}
