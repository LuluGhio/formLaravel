<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){ // code de création
        Schema::create('messages', function(Blueprint $table) {

        $table->increments('id');

        $table->char('first_name', 60);
        $table->char('last_name', 60);
        $table->char('email', 255);
        $table->text('content');
        $table->datetime('createdAt');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() // code de suppression
    {
        Schema::drop('messages');
    }
}
