<?php

use App\Domain\Entity\EntityDangerLevel;
use App\Domain\Entity\EntityType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('species')->nullable()->default(null);
            $table->string('danger_level')->default(EntityDangerLevel::Neutral);
            $table->string('type')->default(EntityType::HabitatLife);
            $table->boolean('is_civilized')->default(false);
            $table->boolean('is_intelligent')->default(false);
            $table->text('description')->nullable()->default(null);
        });

        Schema::create('entity_planet', function (Blueprint $table) {
            $table->foreignId('planet_id')->constrained()->cascadeOnDelete();
            $table->foreignId('entity_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planet_entity');
        Schema::dropIfExists('entities');
    }
};
