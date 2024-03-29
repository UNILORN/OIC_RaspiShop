<?php

use Illuminate\Database\Seeder;

class MST_SALES_DETAILS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        DB::table('MST_SALES_DETAILS')->delete();
        $data = [];
        foreach (range(1, 100) as $value) {
            foreach (range(1, 5) as $value_v) {
                $data[] = [
                    'sales_id' => $value,
                    'product_id' => $value_v,
                    'price' => 400
                ];
            }
        }
        DB::table('MST_SALES_DETAILS')->insert($data);
    }
}
