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
        Schema::create("keluars", function (Blueprint $table) {
            $table->id()->unique("id");
            $table->string("plat");
            $table->date("tanggal");
            $table->time("jam");
            $table->integer("biaya");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("keluars");
    }
};
