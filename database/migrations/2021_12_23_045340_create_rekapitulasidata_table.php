<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapitulasidataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekapitulasidata', function (Blueprint $table) {
            $table->string('id')->unique();
            // $table->string('kode_infaq'); 
            $table->string('keterangan');  
            $table->date('tanggal');
            $table->integer('masuk')->default(0);
            $table->integer('keluar')->default(0);
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
        Schema::dropIfExists('rekapitulasidata');
    }
}
