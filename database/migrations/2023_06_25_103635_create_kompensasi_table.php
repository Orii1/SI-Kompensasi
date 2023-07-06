<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompensasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas')->constrained('kelas');
            $table->foreignId('pengawas')->constrained('pengawas');
            $table->foreignId('ruangan')->constrained('ruangan');
            $table->string('foto');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kompensasi');
    }
};
