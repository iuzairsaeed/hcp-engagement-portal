<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->string('avatar')->default('no-image.png');
            $table->string('password');
            $table->string('pmdc');
            $table->string('phone');
            $table->foreignId('location_id');
            $table->foreignId('speciality_id');
            $table->string('cnic')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->rememberToken();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_admin')->default(false);
            $table->string('device_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::statement(
            'ALTER TABLE users ADD FULLTEXT fulltext_index(name, email, phone, cnic, country, address, street, city, zipcode)'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
