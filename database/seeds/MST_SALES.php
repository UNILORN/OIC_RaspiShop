<?php

use Illuminate\Database\Seeder;

class MST_SALES extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('ja_JP');
      DB::table('MST_SALES')->delete();
      foreach (range(1,100) as $value) {
        DB::table('MST_SALES')->insert([
          'id' => $value,
          'sum_price' => 5000,
          'created_at' => $faker->dateTime()
        ]);
      }
    }
}
