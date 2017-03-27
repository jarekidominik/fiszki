<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idioms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->char('language', 2);
            $table->string('idiom');
            $table->string('use_example');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('idioms');
    }
}
