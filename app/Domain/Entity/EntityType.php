<?php

namespace App\Domain\Entity;

enum EntityType: string
{
    case Enemy = 'enemy';
    case HabitatLife = 'habitat_life';
    case Civilization = 'civilization';
    case Construct = 'construct';
    case Anomaly = 'anomaly';

    public function getLabel(): string
    {
        return match ($this) {
            self::Enemy => 'Enemy',
            self::HabitatLife => 'Habitat Life',
            self::Civilization => 'Civilization',
            self::Construct => 'Construct',
            self::Anomaly => 'Anomaly',
        };
    }
}
