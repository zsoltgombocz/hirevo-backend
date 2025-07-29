<?php

namespace App\Http\Resources;

use App\Models\Phenomena;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin Phenomena
 */
class PhenomenaResource extends JsonResource
{
    public function __construct(Phenomena $resource)
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
            'intensity' => $this->intensity,
            'occurrence_rate' => $this->occurrence_rate,
            'description' => $this->description,
            'planets' => PlanetResource::collection($this->whenLoaded(relationship: 'planets')),
        ];
    }
}
