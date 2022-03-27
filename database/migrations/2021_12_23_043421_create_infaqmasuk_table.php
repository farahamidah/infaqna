<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfaqmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infaqmasuk', function (Blueprint $table) {
            $table->string('id')->unique(); 
            // $table->string('kode_infaq'); 
            $table->string('keterangan');  
            $table->date('tanggal');
            $table->integer('jumlah');
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
        Schema::dropIfExists('infaqmasuk');
    }
}
