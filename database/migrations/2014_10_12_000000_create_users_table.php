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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('about')->default('about');
            $table->string('language')->default('english');
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->string('profile_image')->default('https://cdn-icons-png.flaticon.com/128/3135/3135715.png');
            $table->string('current_plan')->default('free');
            $table->string('phone')->default('0000000000');
            $table->string('status')->default('active');
            $table->string('type')->default('user');
            $table->string('full_address')->default('your address');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
