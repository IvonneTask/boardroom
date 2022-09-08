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
        Schema::create('boardrooms', function (Blueprint $table) {
            $table->id('id');
            $table->string('username')->unique();
            $table->text('roomtype');
            $table->datetime('reservdate');
            $table->time('start_time');
            $table->time('endtime');
            $table->string('state');
            $table->text ('updated_at');
            $table->text ('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boardrooms');
    }
};
