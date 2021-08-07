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
            $table->string('description');
            $table->date('date_to')->nullable();
            $table->date('date_from')->nullable();
            $table->time('time')->nullable();
            $table->enum('type', ['webinar', 'virtual', 'training'])->nullable();
            $table->string('presenter_name')->nullable();
            $table->string('location')->nullable();
            $table->string('url')->nullable();
            $table->string('tag')->nullable();
            $table->string('event_attachment')->nullable();
            $table->foreignId('user_id');
            $table->softDeletes();
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
