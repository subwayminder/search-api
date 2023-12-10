<?php

namespace App\Http\Resources\House;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Pagination\LengthAwarePaginator;
use JsonSerializable;

/**
 *
 * @mixin LengthAwarePaginator
 *
 *
 */
class HouseCollection extends ResourceCollection
{
    /**
     * @param Request $request
     * @return array|JsonSerializable|Arrayable
     */
    public function toArray(Request $request): array|JsonSerializable|Arrayable
    {
        return $this->resource;
    }

}
