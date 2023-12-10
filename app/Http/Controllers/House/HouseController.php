<?php

namespace App\Http\Controllers\House;

use App\Http\Controllers\Controller;
use App\Http\Requests\House\HouseIndexRequest;
use App\Http\Resources\House\HouseCollection;
use App\Http\Resources\House\HouseResource;
use App\Models\House;
use App\Services\House\DTO\HouseFilterDTO;
use App\Services\House\HouseService;
use Illuminate\Http\JsonResponse;

class HouseController extends Controller
{
    public function __construct(private readonly HouseService $houseService)
    {
    }

    public function index(HouseIndexRequest $request): JsonResponse
    {
        $data = $this->houseService->list(
            limit: $request->limit ?: 0,
            filterDTO: HouseFilterDTO::from($request->toArray()),
            orderBy: $request->order_by ?: 'created_at',
            sortType: $request->sort_type ?: 'asc'
        );
        return response()->json(
            HouseCollection::make($data)
        );
    }

    public function show(House $house): JsonResponse
    {
        return response()->json(
            HouseResource::make($house)
        );
    }
}
