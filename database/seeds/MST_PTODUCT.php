<?php

use Illuminate\Database\Seeder;

class MST_PTODUCT extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('ja_JP');

      DB::table('MST_PRODUCT')->delete();

      //
      // RaspberryPi
      //
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 1,
          'name' => 'Raspberry Pi2 Model B',
          'size' => NULL,
          'price' => 4200,
          'company_id' => NULL,
          'img_url' => 'raspberrypi2.png'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 1,
          'name' => 'Raspberry Pi3 Model B',
          'size' => NULL,
          'price' => 4575,
          'company_id' => NULL,
          'img_url' => 'raspberrypi3.jpg'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 1,
          'name' => 'Raspberry Pi Zero',
          'size' => NULL,
          'price' => 2975,
          'company_id' => NULL,
          'img_url' => NULL
      ]);

      //
      // SDcard
      //
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 16GB EVO',
          'size' => 16,
          'price' => 580,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_16evo.jpg'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 32GB EVO',
          'size' => 32,
          'price' => 1625,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_32evo.jpg'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 64GB EVO',
          'size' => 64,
          'price' => 3666,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_64evo.jpg'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 128GB EVO',
          'size' => 128,
          'price' => 7674,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_128evo.jpg'
      ]);

      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 32GB PRO',
          'size' => 32,
          'price' => 2645,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_32pro.jpg'
      ]);
      DB::table('MST_PRODUCT')->insert([
          'type_id' => 2,
          'name' => 'SAMSUNG 64GB PRO',
          'size' => 64,
          'price' => 4816,
          'company_id' => 1,
          'img_url' => 'SDcard/SAMSUNG_64pro.jpg'
      ]);

      //
      // OS
      //
      $os = [
        "CentOS"      => "os/centos.png",
        "Noobs"       => "os/noobs.png",
        "Raspbian"    => "os/raspbian.png",
        "Ubuntu"      => "os/ubuntu.png",
        "Ubuntu Core" => "os/ubuntucore.png",
        "Ubuntu Mate" => "os/ubuntumate.png",
        "Windows10"   => "os/windows10.png"
      ];
      foreach ($os as $key => $value) {
        DB::table('MST_PRODUCT')->insert([
          'type_id' => 3,
          'name' => $key,
          'size' => NULL,
          'price' => 0,
          'company_id' => NULL,
          'img_url' => $value
        ]);
      }
    }
}
