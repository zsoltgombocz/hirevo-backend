<?php

namespace App\Http\Resources;

use App\Models\Entity;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Entity
 */
class EntityResource extends JsonResource
{
    public function __construct(Entity $resource)
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
            'id' => $this->id,
            'name' => $this->name,
            'species' => $this->species,
            'danger_level' => $this->danger_level,
            'type' => $this->type,
            'is_intelligent' => $this->is_intelligent,
            'is_civilized' => $this->is_civilized,
            'description' => $this->description,
            'planets' => PlanetResource::collection($this->whenLoaded(relationship: 'planets')),
        ];
    }
}
