<?php

namespace App\Models;

use App\Domain\Entity\EntityDangerLevel;
use App\Domain\Entity\EntityType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperEntity
 */
class Entity extends Model
{
    protected $fillable = [
        'name', 'species', 'danger_level', 'type', 'is_intelligent', 'is_civilized', 'description',
    ];

    protected $casts = [
        'is_civilized' => 'boolean',
        'is_intelligent' => 'boolean',
        'type' => EntityType::class,
        'danger_level' => EntityDangerLevel::class,
    ];

    /**
     * @return BelongsToMany<Planet, $this>
     */
    public function planets(): BelongsToMany
    {
        return $this->belongsToMany(Planet::class);
    }
}
