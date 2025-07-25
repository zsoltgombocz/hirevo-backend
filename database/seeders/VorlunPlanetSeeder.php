<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class VorlunPlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planet = Planet::where('slug', 'vorlun')->firstOrFail();

        $planet->entities()->createMany([
            [
                'name' => 'Magnetic Wraith',
                'species' => 'Electromagnetic Anomaly',
                'danger_level' => 'high',
                'type' => 'enemy',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'Unseen pulses of magnetic force that interfere with navigation systems and cause electronic hallucinations.',
            ],
            [
                'name' => 'Symmetrical Ice Spire',
                'species' => 'Unknown Construct',
                'danger_level' => 'moderate',
                'type' => 'anomaly',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'Perfectly symmetrical, artificial-looking ice formations that emit low-frequency resonance. No origin recorded.',
            ],
        ]);

        $planet->materials()->createMany([
            [
                'name' => 'Ferromass Crystals',
                'description' => 'Heavy, magnetically active crystals harvested from deep ice crevasses. Used in energy shielding.',
            ],
            [
                'name' => 'Frozen Conductors',
                'description' => 'Supercooled circuits embedded in ancient structures. Retain charge for centuries.',
            ],
        ]);

        $planet->items()->createMany([
            [
                'name' => 'Fragmented Echo Drive',
                'description' => 'Corrupted data shard left by a lost probe. Whispers fragments of forgotten transmissions.',
            ],
            [
                'name' => 'Obsidian Iceflake',
                'description' => 'Razor-thin shard of black ice reflecting impossible angles. Seems older than the planet itself.',
            ],
        ]);

        $planet->phenomenas()->createMany([
            [
                'name' => 'Magnetic Distortion Veil',
                'intensity' => 'severe',
                'occurrence_rate' => 0.5,
                'description' => 'A wide-area electromagnetic field disrupts all digital systems, rendering HUDs unreliable and communications silent.',
            ],
            [
                'name' => 'Echo Field',
                'intensity' => 'moderate',
                'occurrence_rate' => 0.3,
                'description' => 'A silent region where sound is absorbed and past transmissions replay unpredictably. Increases psychological stress.',
            ],
        ]);
    }
}
