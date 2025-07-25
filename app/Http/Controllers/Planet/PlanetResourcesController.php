<?php

namespace App\Http\Controllers\Planet;

use App\Http\Resources\ResourceResource;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetResourcesController
{
    public function __invoke(Planet $planet): JsonResource
    {
        return ResourceResource::collection($planet->resources);
    }
}
