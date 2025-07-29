<?php

use App\Domain\Phenomena\PhenomenaIntensity;
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
        Schema::create('phenomenas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('intensity')->default(PhenomenaIntensity::Neutral);
            $table->float('occurrence_rate')->default(1.0);
            $table->text('description')->nullable()->default(null);
        });

        Schema::create('phenomena_planet', function (Blueprint $table) {
            $table->foreignId('planet_id')->constrained()->cascadeOnDelete();
            $table->foreignId('phenomena_id')->constrained()->cascadeOnDelete();
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
