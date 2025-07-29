<?php

namespace App\Http\Controllers\Planet;

use App\Domain\RequestParser\ParseIncludedRelationships;
use App\Http\Requests\PlanetQueryRequest;
use App\Models\Planet;
use Illuminate\Http\Resources\Json\JsonResource;

class PlanetController
{
    /**
     * @throws \Throwable
     */
    public function index(): JsonResource
    {
        return Planet::all()->toResourceCollection();
    }

    /**
     * @throws \Throwable
     */
    public function show(PlanetQueryRequest $request, Planet $planet): JsonResource
    {
        $includeRelationships = ParseIncludedRelationships::fromRequest(
            request: $request,
            default: ['entities', 'materials', 'items', 'phenomenas']
        );

        return $planet
            ->load($includeRelationships)
            ->toResource();
    }
}
