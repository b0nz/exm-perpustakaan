<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=0;$i<15;$i++){
            $data[$i] = [
                'BookTypeID' => rand(1,10),
                'BookName' => $faker->sentence(rand(3,5)),
                'Description' => $faker->paragraph(rand(3,7)),
                'Publisher' => $faker->company,
                'Year' => $faker->year,
                'Stock' => 100
            ];
        }
        DB::table('Buku')->insert($data);
    }
}
