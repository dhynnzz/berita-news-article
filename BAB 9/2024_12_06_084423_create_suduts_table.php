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
        Schema::create('suduts', function (Blueprint $table) {
            $table->id('id_informasi');
            $table->string('judul_informasi',50);
            $table->string('sumber_informasi',50);
            $table->text('deskripsi');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suduts');
    }
};
