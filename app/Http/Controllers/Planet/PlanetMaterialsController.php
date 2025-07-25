<?php

namespace App\Http\Controllers\Planet;

use App\Http\Resources\MaterialResource;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetMaterialsController
{
    public function __invoke(Planet $planet): JsonResource
    {
        return MaterialResource::collection($planet->materials);
    }
}
