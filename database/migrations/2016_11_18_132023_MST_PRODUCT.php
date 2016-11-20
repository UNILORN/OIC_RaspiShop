<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MSTPRODUCT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('MST_PRODUCT', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('type_id');
          $table->string('name');
          $table->integer('size')->nullable();
          $table->integer('price');
          $table->integer('company_id')->nullable();
          $table->string('img_url')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MST_RASPBERRY');
    }
}
