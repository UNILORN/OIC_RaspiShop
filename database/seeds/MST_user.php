<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MST_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'aa@aa.aa',
            'password' => bcrypt('admin'),
            'phone' => '0111101011',
            'address' => 'doko',
            'sex' => 1,
            'birth' => Carbon::now(),
        ]);
    }
}
