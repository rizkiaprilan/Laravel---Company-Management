<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'R 5337 PC', 'description'=>'Mobil Toyota Fortuner Biru'],
            ['name'=>'R 1234 AC','description'=>'Mobil Honda Jazz Merah'],
            ['name'=>'R 3342 PC','description'=>'Mobil Honda Jazz Kuning'],
        ];
        foreach($data as $d){
            DB::table('inventories')->insert([
                'name' => $d['name'],
                'description' => $d['description'],
            ]);
        }


    }
}
