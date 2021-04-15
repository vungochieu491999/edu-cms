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
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->text('permissions')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username', 60)->unique()->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('secondary_address', 255)->nullable();
            $table->string('job_position', 60)->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('secondary_phone', 15)->nullable();
            $table->string('secondary_email', 60)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('website', 120)->nullable();
            $table->string('skype', 60)->nullable();
            $table->string('facebook', 120)->nullable();
            $table->string('twitter', 120)->nullable();
            $table->string('google_plus', 120)->nullable();
            $table->string('youtube', 120)->nullable();
            $table->string('github', 120)->nullable();
            $table->string('interest', 255)->nullable();
            $table->string('about', 400)->nullable();
            $table->integer('avatar_id')->unsigned()->nullable();
            $table->boolean('super_user')->default(0);
            $table->boolean('manage_supers')->default(0);
            $table->boolean('completed_profile')->default(0);
            $table->string('password')->nullable()->change();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->string('slug', 120)->unique();
            $table->text('permissions')->nullable();
            $table->string('description', 255)->nullable();
            $table->tinyInteger('is_default')->unsigned()->default(0);
            $table->integer('created_by')->unsigned()->references('id')->on('users')->index();
            $table->integer('updated_by')->unsigned()->references('id')->on('users')->index();
            $table->timestamps();
        });

        Schema::create('role_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->references('id')->on('users')->index();
            $table->integer('role_id')->unsigned()->references('id')->on('roles')->index();
            $table->nullableTimestamps();
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('role_users');
    }
}
