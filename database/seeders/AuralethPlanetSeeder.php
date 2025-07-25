<?php

namespace Database\Seeders;

use App\Models\Planet;
use Illuminate\Database\Seeder;

class AuralethPlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planet = Planet::where('slug', 'auraleth')->firstOrFail();

        $planet->entities()->createMany([
            [
                'name' => 'Selu-Nai Bloomchild',
                'species' => 'Mobile Plant Offshoot',
                'danger_level' => 'friendly',
                'type' => 'civilization',
                'is_intelligent' => true,
                'is_civilized' => true,
                'description' => 'A mobile node of the forest-wide consciousness. The Selu-Nai are symbiotic beings formed from both flora and fauna, communicating through shifting light pulses and sharing a decentralized mind.',
            ],
            [
                'name' => 'Spore Lynx',
                'species' => 'Ambush Predator',
                'danger_level' => 'moderate',
                'type' => 'enemy',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'A bioluminescent predator that stalks the jungle shadows, releasing neurotoxic spores to disorient prey before striking from fungal cover.',
            ],
            [
                'name' => 'Sap-Minded Drone',
                'species' => 'Floral Servitor',
                'danger_level' => 'neutral',
                'type' => 'habitat_life',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'A devoted servitor grown by the forest intelligence, tending to root networks and carrying out the will of the jungle-wide neural web.',
            ],
            [
                'name' => 'Lumivine Traproot',
                'species' => 'Neuro-reactive Vine',
                'danger_level' => 'low',
                'type' => 'anomaly',
                'is_intelligent' => false,
                'is_civilized' => false,
                'description' => 'Vines and roots that react to neural signals and kinetic triggers, coiling instinctively around intruders as a defense mechanism.',
            ],
            [
                'name' => 'Heart-Grove Relic',
                'species' => 'Sentient Flora Node',
                'danger_level' => 'neutral',
                'type' => 'construct',
                'is_intelligent' => true,
                'is_civilized' => true,
                'description' => 'A dense cluster of neural vines functioning as a relay for the jungle consciousness. Standing near it induces a mild empathic resonance and allows for neural communication.',
            ],
        ]);

        $planet->items()->createMany([
            [
                'name' => 'Biolumina Core',
                'description' => 'A glowing seed crystal attuned to symbiotic signals. Grants temporary access to forest-grown barriers and neural pathways.',
            ],
            [
                'name' => 'Selu Bark Etching',
                'description' => 'Thin bark slices etched with rhythmic bio-light inscriptions, carrying fragments of collective memory in the language of the jungle.',
            ],
        ]);

        $planet->materials()->createMany([
            [
                'name' => 'Glowspore Husk',
                'description' => 'Remnants of luminous spores that store ambient light, used to extend visibility and facilitate communication with local flora through bioluminescent displays. Essential for symbiotic integration.',
            ],
            [
                'name' => 'Photosynth Resin',
                'description' => 'A nutrient-rich secretion that amplifies photosynthetic efficiency, powering energy-based tools and fostering rapid plant growth.',
            ],
        ]);

        $planet->phenomenas()->createMany([
            [
                'name' => 'Neural Bloom Wave',
                'intensity' => 'minor',
                'occurrence_rate' => 0.6,
                'description' => 'Triggered by planetary alignment or collective emotion, this wave causes all nearby flora to pulse in synchrony, immersing explorers in a fleeting, shared neural experience with the forest mind.',
            ],
            [
                'name' => 'Sentient Migration Pulse',
                'intensity' => 'moderate',
                'occurrence_rate' => 0.2,
                'description' => 'Sections of the jungle shift locations as part of a collective ecological decision, displacing structures and resources in a coordinated environmental rebalancing.',
            ],
        ]);
    }
}
