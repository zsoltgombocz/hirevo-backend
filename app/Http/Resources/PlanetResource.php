<?php

namespace App\Http\Resources;

use App\Models\Planet;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Planet
 */
class PlanetResource extends JsonResource
{
    public function __construct(Planet $resource)
    {
        parent::__construct($resource);
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'terrain' => $this->terrain,
            'biome' => $this->biome,
            'description' => $this->description,
            'entities' => EntityResource::collection($this->whenLoaded(relationship: 'entities')),
            'resources' => ResourceResource::collection($this->whenLoaded('resources')),
            'items' => ItemResource::collection($this->whenLoaded('items')),
            'phenomenas' => PhenomenaResource::collection($this->whenLoaded('phenomenas')),
        ];
    }
}
