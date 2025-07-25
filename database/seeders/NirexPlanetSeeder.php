<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class NirexPlanetSeeder extends Seeder
{
    public function run(): void
    {
        $planet = Planet::where('slug', 'nirex')->firstOrFail();

        $planet->entities()->createMany([
            [
                'name' => 'Shatterbeast',
                'species' => 'Crystal Horror',
                'danger_level' => 'high',
                'type' => 'enemy',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'A massive semi-transparent creature with a crystal shell. Attacks anything that disturbs its path.',
            ],
            [
                'name' => 'Dust Echo',
                'species' => 'Psionic Residue',
                'danger_level' => 'moderate',
                'type' => 'anomaly',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'A remnant of Tharnyx psychic energy that distorts perception and time.',
            ],
            [
                'name' => 'Tharnyx Spire',
                'species' => 'Ancient Construct',
                'danger_level' => 'low',
                'type' => 'construct',
                'is_intelligent' => false,
                'is_civilized' => true,
                'description' => 'An ancient Tharnyx structure that emits rhythmic pulses, sometimes healing or scrambling equipment.',
            ],
            [
                'name' => 'Fractal Mite',
                'species' => 'Psionic Microfauna',
                'danger_level' => 'neutral',
                'type' => 'habitat_life',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'Microscopic intelligent mites that cause subtle changes in terrain when clustered.',
            ],
            [
                'name' => 'Sentinel Core',
                'species' => 'Tharnyx AI Fragment',
                'danger_level' => 'neutral',
                'type' => 'civilization',
                'is_intelligent' => true,
                'is_civilized' => true,
                'description' => 'An isolated AI remnant of the Tharnyx, interacting only through puzzles.',
            ],
        ]);

        $planet->items()->createMany([
            [
                'name' => 'Psionic Fracture Crystal',
                'description' => 'A radiant crystal that glows near deception. Used to detect lies.',
            ],
            [
                'name' => 'Tharnyx Glyph Fragment',
                'description' => 'Fragment of an ancient language key. Required to interpret Tharnyx ruins.',
            ],
        ]);

        $planet->resources()->createMany([
            [
                'name' => 'Crystalized Memory Dust',
                'description' => 'Can temporarily enhance navigation and memory systems.',
            ],
            [
                'name' => 'Ether-Infused Sand',
                'description' => 'Rare component used in crafting time-delay modules and psionic tech.',
            ],
        ]);

        $planet->phenomenas()->createMany([
            [
                'name' => 'Psionic Pulse Storm',
                'intensity' => 'moderate',
                'occurrence_rate' => 0.3,
                'description' => 'Disruptive psychic waves that disable tech and confuse controls.',
            ],
            [
                'name' => 'Fracture Collapse',
                'intensity' => 'moderate',
                'occurrence_rate' => 0.1,
                'description' => 'Sudden shifting of crystal plates causes terrain deformation and trap creation.',
            ],
        ]);
    }
}
