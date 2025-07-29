<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class KaedrosPlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planet = Planet::where('slug', 'kaedros')->firstOrFail();

        $planet->entities()->createMany([
            [
                'name' => 'Tarkari Flamecaller',
                'species' => 'Tarkari',
                'danger_level' => 'high',
                'type' => 'civilization',
                'is_intelligent' => true,
                'is_civilized' => true,
                'description' => 'Approaches outsiders with ritual suspicion. Not inherently hostile — may initiate duels or rites depending on perceived symbolic respect.',
            ],
            [
                'name' => 'Ashborn Strider',
                'species' => 'Volcanic Fauna',
                'danger_level' => 'moderate',
                'type' => 'habitat_life',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'A six-legged lava-skimmer that leaves behind smoldering footprints. Often found around clan territories.',
            ],
            [
                'name' => 'Tarkari Emberblade',
                'species' => 'Tarkari',
                'danger_level' => 'critical',
                'type' => 'enemy',
                'is_intelligent' => true,
                'is_civilized' => true,
                'description' => 'An elite Tarkari warrior whose blade is forged from lava-cooled ore and who enters battle under sacred fire trance. Recognizes only domination.',
            ],
            [
                'name' => 'Magma Waystone',
                'species' => 'Clansoul Monument',
                'danger_level' => 'low',
                'type' => 'construct',
                'is_intelligent' => false,
                'is_civilized' => true,
                'description' => 'Pillars inscribed with the trials of fallen Tarkari. When touched, emit heat pulses that resonate with ancient warrior spirits.',
            ],
        ]);

        $planet->materials()->createMany([
            [
                'name' => 'Coreslag',
                'description' => 'Molten metal and stone residue hardened into jagged shards. Used in clan forges and high-durability gear.',
            ],
            [
                'name' => 'Ash Resin',
                'description' => 'Sticky residue from burned flora and fauna, used in explosives and fuel mixtures.',
            ],
        ]);

        $planet->items()->createMany([
            [
                'name' => 'Tarkari War Mask',
                'description' => 'Forged from obsidian and slag, these ceremonial masks tell the lineage of warriors who wore them.',
            ],
            [
                'name' => 'Volcanic Chant Scroll',
                'description' => 'A fireproof scroll etched with musical notations and drum rhythms that evoke volcanic energy.',
            ],
        ]);

        $planet->phenomenas()->createMany([
            [
                'name' => 'Ash Storm',
                'intensity' => 'moderate',
                'occurrence_rate' => 0.4,
                'description' => 'Blinding windstorms of ash and embers sweep across the highlands, disrupting vision and overheating sensitive systems.',
            ],
            [
                'name' => 'Eruption Trance',
                'intensity' => 'severe',
                'occurrence_rate' => 0.2,
                'description' => 'Triggered by active lava flow, the sound and heat place native Tarkari into a berserker trance.',
            ],
        ]);
    }
}
