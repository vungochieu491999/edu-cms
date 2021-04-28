<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email')->unique()->index();
            $table->string('password')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('gender',30)->nullable();
            $table->string('address', 255)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->dateTime('confirmed_at')->nullable();
            $table->string('email_verify_token',120)->nullable();
            $table->integer('avatar_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('member_activity_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('action', 120);
            $table->text('user_agent')->nullable();
            $table->string('reference_url',255)->nullable();
            $table->string('reference_name', 255)->nullable();
            $table->integer('member_id')->unsigned()->references('id')->on('members')->default(0)->index();
            $table->timestamps();
        });

        Schema::create('member_active_code', function (Blueprint $table) {
            $table->integer('member_id')->unsigned()->references('id')->on('members')->default(0)->index();
            $table->text('active_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::dropIfExists('member_activity_logs');
        Schema::dropIfExists('member_active_code');
    }
}
