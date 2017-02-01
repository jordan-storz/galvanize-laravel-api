<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
          'make' => 'saab',
          'model' => '9-3',
          'year' => '1999',
          'rating' => 3
        ])
    }
}
