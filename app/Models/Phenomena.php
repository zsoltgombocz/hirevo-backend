<?php

namespace App\Models;

use App\Domain\Phenomena\PhenomenaIntensity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @mixin IdeHelperPhenomena
 */
class Phenomena extends Model
{
    protected $fillable = [
        'name', 'intensity', 'occurrence_rate', 'description',
    ];

    protected $casts = [
        'intensity' => PhenomenaIntensity::class,
    ];

    /**
     * @return BelongsToMany<Planet, $this>
     */
    public function planets(): BelongsToMany
    {
        return $this->belongsToMany(Planet::class);
    }
}
