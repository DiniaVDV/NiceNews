<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavbarMenuTable extends Migration
{
    public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbar_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position');
            $table->string('title', 50);
            $table->string('alias', 50);
            $table->string('for_reg_users', 50)->default('true');
            $table->string('for_unreg_users', 50)->default('true');
            $table->string('dropdown', 50)->default('false');
            $table->string('for_admin', 50)->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('navbar_menu');
    }
}
