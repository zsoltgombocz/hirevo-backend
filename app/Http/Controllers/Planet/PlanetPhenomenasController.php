<?php

namespace App\Http\Controllers\Planet;

use App\Http\Resources\PhenomenaResource;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetPhenomenasController
{
    public function __invoke(Planet $planet): JsonResource
    {
        return PhenomenaResource::collection($planet->phenomenas);
    }
}
