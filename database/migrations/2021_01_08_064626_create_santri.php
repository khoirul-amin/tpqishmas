<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santri', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nis')->nullable()->comment('no induk santri');
            $table->string('name');
            $table->bigInteger('phone');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->bigInteger('kelas_id');
            $table->string('wali')->nullable();
            $table->bigInteger('nik')->nullable();
            $table->bigInteger('nokk')->nullable();
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
        Schema::dropIfExists('santri');
    }
}
