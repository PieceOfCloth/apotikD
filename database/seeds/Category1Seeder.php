<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories1')->insert([
            'name' => 'Analgesik Narkotik',
            'description' => 'Analgesik Narkotik adalah...',
        ]);
        DB::table('categories1')->insert([
            'name' => 'Analgesik Non Narkotik',
            'description' => 'Analgesik Non Narkotik adalah...',
        ]);
    }
}
