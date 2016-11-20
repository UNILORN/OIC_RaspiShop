<?php

use Illuminate\Database\Seeder;

class MST_SALES_TYPE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('MST_TYPE')->delete();
      DB::table('MST_TYPE')->insert([
          'id' => 1,
          'name' => 'RaspberryPi'
      ]);
      DB::table('MST_TYPE')->insert([
          'id' => 2,
          'name' => 'SDcard'
      ]);
      DB::table('MST_TYPE')->insert([
          'id' => 3,
          'name' => 'OS'
      ]);
    }
}
