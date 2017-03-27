<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDictionaryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('dictionary', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('id_idiom')->unsigned();
            $table->primary(['id', 'id_idiom']);
            
            $table->foreign('id_idiom')->references('id')->on('idioms');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('dictionary');
    }

}
