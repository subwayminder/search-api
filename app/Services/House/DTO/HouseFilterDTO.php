<?php

namespace App\Services\House\DTO;

use Spatie\LaravelData\Data;

class HouseFilterDTO extends Data
{
    public ?string $name;
    public ?int $price_from;
    public ?int $price_to;
    public ?int $bedrooms;
    public ?int $bathrooms;
    public ?int $storeys;
    public ?int $garages;
}
