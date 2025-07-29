<?php

namespace App\Http\Controllers\Planet;

use App\Http\Resources\ItemResource;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetItemsController
{
    public function __invoke(Planet $planet): JsonResource
    {
        return ItemResource::collection($planet->items);
    }
}
