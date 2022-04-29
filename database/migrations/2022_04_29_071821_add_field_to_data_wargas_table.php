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
        Schema::table('data_wargas', function (Blueprint $table) {
            $table->enum('vaksin_level', ['belum', '1', '2', '3', '4']);
            $table->enum('listrik', ['pribadi, belum_punya']);
            $table->enum('pdam', ['pribadi, belum_punya']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('data_wargas', function (Blueprint $table) {
            $table->dropColumn('vaksin_level');
            $table->dropColumn('listrik');
            $table->dropColumn('pdam');
        });
    }
};
