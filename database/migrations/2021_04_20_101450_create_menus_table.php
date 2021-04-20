<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->string('slug',120);
            $table->string('status',60)->default('published');
            $table->timestamps();
        });

        Schema::create('menu_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_id')->unsigned();
            $table->string('location',120);
            $table->timestamps();
        });

        Schema::create('menu_nodes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('parent_id')->unsigned()->default(0);
            $table->bigInteger('reference_id')->unsigned()->nullable()->default(0);
            $table->string('reference_type')->nullable();
            $table->string('url',120)->nullable();
            $table->string('icon_font',50)->nullable();
            $table->tinyInteger('position')->default(0);
            $table->string('title',120)->nullable();
            $table->string('css_class',120)->nullable();
            $table->string('target',20)->default('_self');
            $table->tinyInteger('has_child')->default(0);
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
        Schema::dropIfExists('menus');
        Schema::dropIfExists('menu_locations');
        Schema::dropIfExists('menu_nodes');
    }
}
