<?php

namespace App\Http\Controllers\Planet;

use App\Http\Resources\EntityResource;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetEntitiesController
{
    public function __invoke(Planet $planet): JsonResource
    {
        return EntityResource::collection($planet->entities);
    }
}
