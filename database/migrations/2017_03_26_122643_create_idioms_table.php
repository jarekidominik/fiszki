<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('idioms', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('idiom_en');
            $table->string('use_example_en');
            $table->string('idiom_pl');
            $table->string('use_example_pl');

            
         //   $table->integer('user_id')->unsigned();
         //   $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('idioms');
    }

}
