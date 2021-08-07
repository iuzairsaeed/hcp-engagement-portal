<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('organization')->nullable();
            $table->string('therapeutic_area')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->boolean('currently_here')->default(false);
            $table->date('date_from')->nullable();
            $table->date('date_to')->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
