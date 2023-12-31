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
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->integer("position");
            $table->unsignedBigInteger("team_id");
            $table->integer("played");
            $table->integer("won");
            $table->integer("drawn");
            $table->integer("lost");
            $table->integer("goals_for");
            $table->integer("goals_against");
            $table->integer("goal_difference");
            $table->integer("points");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
