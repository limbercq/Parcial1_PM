<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentificadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identificadors', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('ci')->unique();
            $table->string('nombre',50);
            $table->date('f_naci');
            $table->string('residencia',3);
        });
        DB::table('identificadors')->insert(array('id'=>'1','ci'=>8308638, 'nombre'=>'Limber Alberto Choque Quisbert', 'f_naci'=>'1996-01-23','residencia'=>'lp'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identificadors');
    }
}
