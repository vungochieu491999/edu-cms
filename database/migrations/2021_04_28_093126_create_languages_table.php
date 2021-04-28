<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->integer('lang_id')->unsigned()->autoIncrement();
            $table->string('lang_name',120);
            $table->string('lang_locale',20);
            $table->string('lang_code',20);
            $table->string('lang_flag',20);
            $table->tinyInteger('lang_is_default')->default(0);
            $table->integer('lang_order')->default(0);
            $table->tinyInteger('lang_is_rtl')->unsigned()->default(0);
            $table->timestamps();
        });

        Schema::create('language_meta', function (Blueprint $table) {
            $table->increments('lang_meta_id');
            $table->integer('lang_meta_content_id')->unsigned()->index();
            $table->text('lang_meta_code')->nullable();
            $table->string('lang_meta_reference', 120);
            $table->string('lang_meta_origin', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
        Schema::dropIfExists('language_meta');
    }
}
