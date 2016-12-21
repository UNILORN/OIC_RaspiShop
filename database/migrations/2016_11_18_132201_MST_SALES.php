<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MSTSALES extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('MST_SALES', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('sum_price');
          $table->string('name');
          $table->string('sex');
          $table->string('post_num');
          $table->string('address');
          $table->string('email');
          $table->integer('user_id')->nullable();
          $table->timestamp('created_at')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MST_SALES');
    }
}
