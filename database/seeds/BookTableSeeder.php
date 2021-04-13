<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'Nineteen Eighty-Four',
            'author' => 'George Orwell',
            'year' => '1949',
        ]);
        DB::table('books')->insert([
            'title' => 'Fahrenheit 451',
            'author' => 'Ray Bradbury',
            'year' => '1953',
        ]);
    }
}
