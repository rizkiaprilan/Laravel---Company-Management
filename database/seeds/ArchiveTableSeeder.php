<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;
class ArchiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'BPKB & STNK','description' => 'R 5337 PC', 'inventory_id'=>'1'],
            ['name'=>'BPKB & STNK','description' => 'R 1234 AC','inventory_id'=>'2'],
            ['name'=>'STNK','description' => 'R 3342 PC','inventory_id'=>'3'],


        ];
        foreach($data as $d){
            DB::table('archives')->insert([
                'name' => $d['name'],
                'inventory_id' => $d['inventory_id'],
                'description' => $d['description'],
            ]);
        }
    }
}
