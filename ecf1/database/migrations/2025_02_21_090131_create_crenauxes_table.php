<?php

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
        Schema::create('crenauxes', function (Blueprint $table) {
            $table->id();
            $table->dateTime('debut');
            $table->dateTime('fin');
            $table->foreignIdFor(App\Models\Cour::class, 'id_cours')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crenauxes');
    }
};
