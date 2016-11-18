<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MSTSALESDETAILS extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('MST_SALES_DETAILS', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('sales_id');
          $table->integer('product_id');
          $table->integer('price');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MST_SALES_DETAILS');
    }
}
