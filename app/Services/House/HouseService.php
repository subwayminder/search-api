<?php

namespace App\Services\House;

use App\Models\House;
use App\Services\House\DTO\HouseFilterDTO;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;

class HouseService
{
    public function list(
        int $limit = 10,
        ?HouseFilterDTO $filterDTO = null,
        ?string $orderBy = '',
        ?string $sortType = 'asc',
    ): LengthAwarePaginator
    {
        $builder = House::query();
        if ($orderBy) {
            $builder->orderBy($orderBy, $sortType);
        }

        $this->applyFilters($builder, $filterDTO);

        $perPage = $limit === 0 ? $builder->count() : $limit;
        return $builder->paginate($perPage);
    }

    private function applyFilters(Builder &$builder, HouseFilterDTO $filterDTO): void
    {
        if ($filterDTO->name) {
            $builder->where('name', 'LIKE', "%$filterDTO->name%");
        }
        if ($filterDTO->price_from !== null) {
            $builder->where('price', '>', $filterDTO->price_from);
        }
        if ($filterDTO->price_to !== null) {
            $builder->where('price', '<', $filterDTO->price_to);
        }
        if ($filterDTO->garages !== null) {
            $builder->where('garages', $filterDTO->garages);
        }
        if ($filterDTO->bedrooms !== null) {
            $builder->where('bedrooms', $filterDTO->bedrooms);
        }
        if ($filterDTO->bathrooms !== null) {
            $builder->where('bathrooms', $filterDTO->bathrooms);
        }
        if ($filterDTO->storeys !== null) {
            $builder->where('storeys', $filterDTO->storeys);
        }
    }
}
