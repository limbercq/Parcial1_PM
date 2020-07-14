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

            $table->string('password');
            $table->string('color',10);
        });
        DB::table('users')->insert(array('usuario'=>'8308638','password'=>'$2y$10$rq1AGZcPv9zO7XRp/P2ZoOC5Muu37YdKaEGdM2yDM/0/NijruiWSm','color'=>'#f8f9fa'));
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
