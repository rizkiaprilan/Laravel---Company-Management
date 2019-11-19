<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             DepartmentsTableSeeder::class,
             PositionsTableSeeder::class,
             EmployeesTableSeeder::class,
             KaryawanTableSeeder::class,
             InventoryTableSeeder::class,
             ArchiveTableSeeder::class,
             EmployeeInventoryTableSeeder::class,

         ]);
    }
}
