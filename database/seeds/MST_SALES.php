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
        foreach (range(1, 100) as $value) {
            DB::table('MST_SALES')->insert([
                'id' => $value,
                'sum_price' => rand(2000,40000),
                'name' => $faker->name(),
                'sex' => rand(1, 2),
                'post_num' => $faker->postcode(),
                'address' => $faker->address(),
                'email' => $faker->email(),
                'created_at' => $faker->dateTime()
            ]);
        }
    }
}
