<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MST_COMPANY::class);
        $this->call(MST_PTODUCT::class);
        $this->call(MST_SALES_DETAILS::class);
        $this->call(MST_SALES_TYPE::class);
        $this->call(MST_SALES::class);
        $this->call(MST_user::class);
    }
}
