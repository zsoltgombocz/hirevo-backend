<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planets = [
            [
                'name' => 'Nirex',
                'slug' => 'nirex',
                'biome' => 'Crystalline Desert',
                'terrain' => 'Fractured crystal ridges, subterranean tunnels',
                'description' => 'Once a radiant world of psionic crystal beings, now silent and fractured. Tharnyx ruins pulse faintly, and strange energies animate the dust.',
            ],
            [
                'name' => 'Auraleth',
                'slug' => 'auraleth',
                'biome' => 'Bioluminescent Jungle',
                'terrain' => 'Dense forest canopy, luminous fungal valleys',
                'description' => 'Auraleth pulses with light and thought. Every plant is part of a slow-thinking intelligence, occasionally forming mobile offspring like the Selu-Nai.',
            ],
            [
                'name' => 'Vorlun',
                'slug' => 'vorlun',
                'biome' => 'Frozen Waste',
                'terrain' => 'Ice crevasses, magnetic storms',
                'description' => 'Lifeless, yet not silent. Vorlun is a place where machines go dark and memories distort. Something shaped its frost, but no one remembers what.',
            ],
            [
                'name' => 'Kaedros',
                'slug' => 'kaedros',
                'biome' => 'Volcanic Highlands',
                'terrain' => 'Lava rivers, ash plains, basalt cliffs',
                'description' => 'Kaedros is a world in motion — lava moves, clans war, gods erupt. The Tarkari fight not for land, but for symbolic domination of flame.',
            ],
        ];

        Planet::query()->insert($planets);
    }
}
