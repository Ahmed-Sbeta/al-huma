<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->datetime("event_start");
            $table->datetime("event_end");
            $table->string('location');
            $table->string('image');
            $table->integer('capacity')->nullable();
            $table->string('type');
            $table->boolean('male_allowed');
            $table->boolean('Female_allowed');
            $table->integer('organizerID');
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
        Schema::dropIfExists('events');
    }
}
