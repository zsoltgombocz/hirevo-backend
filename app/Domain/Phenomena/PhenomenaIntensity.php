<?php

namespace App\Domain\Phenomena;

enum PhenomenaIntensity: string
{
    case Neutral = 'neutral';
    case Minor = 'minor';
    case Moderate = 'moderate';
    case Severe = 'severe';
    case Catastrophic = 'catastrophic';

    public function getLabel(): string
    {
        return match ($this) {
            self::Neutral => 'Neutral',
            self::Minor => 'Minor',
            self::Moderate => 'Moderate',
            self::Severe => 'Severe',
            self::Catastrophic => 'Catastrophic',
        };
    }
}
