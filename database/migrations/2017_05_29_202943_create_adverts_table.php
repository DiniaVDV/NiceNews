<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverbs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->float('price', 100);
            $table->text('content');
            $table->string('discount', 100);
            $table->string('name_company', 100);
            $table->string('site_company', 100);
            $table->integer('position');
            $table->string('leftsidebar', 100);
            $table->string('righttsidebar', 100);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adverbs');
    }
}
