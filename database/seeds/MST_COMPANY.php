<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MST_COMPANY extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('MST_COMPANY')->delete();
      DB::table('MST_COMPANY')->insert([
        'name' => 'SAMSUNG'
      ]);
    }
}
