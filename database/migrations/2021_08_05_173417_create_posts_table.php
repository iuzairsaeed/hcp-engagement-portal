<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_image');
            $table->string('title');
            $table->string('description');
            $table->foreignId('user_id');
            $table->softDeletes();
            $table->timestamps();
        });

        DB::statement(
            'ALTER TABLE posts ADD FULLTEXT fulltext_index(title,description)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
