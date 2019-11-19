<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['jabatan' => 'Staff'],
            ['jabatan' => 'CEO'],
            ['jabatan' => 'IT Support'],
            ['jabatan' => 'Manager'],
            ['jabatan' => 'Developer'],
            ['jabatan' => 'Developer'],
            ['jabatan' => 'Security Guard'],
            ['jabatan' => 'Staff'],
            ['jabatan' => 'Customer Service'],
            ['jabatan' => 'Cleaning Service'],

        ];
        $faker = Faker::create();           //bikin data dummy/ palsu
        $i = 0;
        foreach ($data as $d) {
            $position = $i + 1;
            $i++;
            DB::table('karyawan')->insert([
                'nip' => '00' . $position,
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'jabatan' => $d['jabatan'],

            ]);
        }
    }
}
