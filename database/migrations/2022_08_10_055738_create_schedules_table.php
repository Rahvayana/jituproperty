<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('film_id')
            ->references('id')
            ->on('films')
            ->onDelete('cascade');
            $table->foreignId('cinema_id')
            ->references('id')
            ->on('cinemas')
            ->onDelete('cascade');
            $table->timestamp('date_time');
            $table->integer('chair');
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
        Schema::dropIfExists('schedules');
    }
}
