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
        Schema::create('data_wargas', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('no_kk');
            $table->string('rt_id');
            $table->string('nama');
            $table->enum('jns_kel', ['L', 'P']);
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('gol_darah');
            $table->enum('st_kawin', ['belum_kawin', 'kawin', 'cerai_hidup', 'cerai_mati']);
            $table->string('kewarganegaraan');
            $table->string('alamat');
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
        Schema::dropIfExists('data_wargas');
    }
};
