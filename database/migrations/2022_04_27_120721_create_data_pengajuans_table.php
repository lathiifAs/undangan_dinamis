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
        Schema::create('data_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('rt_id');
            $table->string('nik');
            $table->string('jns_pengajuan');
            // sku
            $table->string('nama_usaha')->nullable();
            $table->string('alamat_usaha')->nullable();
            $table->string('diperuntukan')->nullable();
            // pindah domisili
            $table->string('alamat_pertama')->nullable();
            $table->string('alamat_kedua')->nullable();
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
        Schema::dropIfExists('data_pengajuans');
    }
};
