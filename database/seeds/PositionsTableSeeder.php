<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert banyak data
        $data = [
            ['name'=>'Manager Finance','department_id'=>1],
            ['name'=>'Staff Finance','department_id'=>1],
            ['name'=>'General Manager IT Enginering','department_id'=>2],
            ['name'=>'Manager IT Enginering','department_id'=>2],
            ['name'=>'Manager Administration','department_id'=>3],
            ['name'=>'Supervisi Administration','department_id'=>3],
            ['name'=>'Manager Operation','department_id'=>4],
            ['name'=>'Staff Operation','department_id'=>4],
        ];
        foreach($data as $d){
            DB::table('positions')->insert([
                'name' => $d['name'],
                'department_id' => $d['department_id'],
                'code' => "",
            ]);
        }
    }
}
