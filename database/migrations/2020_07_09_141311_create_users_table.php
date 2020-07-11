<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Integer('usuario')->unique();
            $table->foreign('usuario')->references('ci')->on('identificadors')->onDelete('cascade');

            $table->string('clave');
        });
        DB::table('users')->insert(array('usuario'=>'8308638','clave'=>'$2y$10$rq1AGZcPv9zO7XRp/P2ZoOC5Muu37YdKaEGdM2yDM/0/NijruiWSm'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
