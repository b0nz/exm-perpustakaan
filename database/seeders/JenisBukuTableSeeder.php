<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisBukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = ['Novel','Komik','Biografi','Ensiklopedia','Fiksi','Non-Fiksi','Cerpen','Puisi','Dongeng','Kamus'];
        for($i=0;$i<count($input);$i++) {
            $data[$i] = [
                'BookType' => $input[$i],
            ];
        }
        DB::table('JenisBuku')->insert($data);
    }
}
