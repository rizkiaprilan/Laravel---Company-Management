<?php

use Illuminate\Database\Seeder;
use Faker\factory  as Faker;
class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();           //bikin data dummy/ palsu
        for ($i=0; $i < 7; $i++) {
            $position = $i + 1;
            DB::table('employees')->insert([
                'nip'     => '20190'.$position,
                'name' => $faker->name,
                'address'   => $faker->address,
                'email'            => $faker->safeEmail,
                'position_id'       => $position,
            ]);
        }
    }
}
