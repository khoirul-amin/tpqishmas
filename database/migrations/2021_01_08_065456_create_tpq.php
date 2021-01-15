<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpq', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->date('tahun_berdiri')->nullable();
            $table->string('logo')->nullable();
            $table->string('nspq')->nullable();
            $table->bigInteger('user_id')->nullable()->comment('kepala_sekolah');
            $table->bigInteger('periode_id')->nullable()->comment('tahun_ajaran');
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
        Schema::dropIfExists('tpq');
    }
}
