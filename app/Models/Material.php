<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperMaterial
 */
class Material extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    /**
     * @return BelongsToMany<Planet, $this>
     */
    public function planets(): BelongsToMany
    {
        return $this->belongsToMany(Planet::class);
    }
}
