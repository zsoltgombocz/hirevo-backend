<?php

namespace App\Domain\Entity;

enum EntityDangerLevel: string
{
    case Friendly = 'friendly';
    case Neutral = 'neutral';
    case Low = 'low';
    case Moderate = 'moderate';
    case High = 'high';
    case Critical = 'critical';

    public function getLabel(): string
    {
        return match ($this) {
            self::Friendly => 'Friendly',
            self::Neutral => 'Neutral',
            self::Low => 'Low Threat',
            self::Moderate => 'Moderate Threat',
            self::High => 'High Threat',
            self::Critical => 'Critical Threat',
        };
    }
}
