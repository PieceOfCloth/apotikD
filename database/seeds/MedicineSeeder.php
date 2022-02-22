<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'formula' => 'inj 0.05 mg/mL (i.m./i.v.)',
            'restriction_formula' => '5amp/kasus',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'formula' => 'patch 12.5 mcg/jam',
            'restriction_formula' => '10 patch/bulan',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'fentanil',
            'formula' => 'patch 25 mcg/jam',
            'restriction_formula' => '10 patch/bulan',
            'description' => 'inj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'formula' => 'tab lepas lambat 8 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'hidromorfon',
            'formula' => 'tab lepas lambat 16 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'category_id' => 1,
            'faskes_tk1' => 0,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);

        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'formula' => 'kaps 250 mg',
            'restriction_formula' => '30 kaps/bulan',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'asam mefenamat',
            'formula' => 'tab 500 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'formula' => 'tab 200 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'formula' => 'tab 400 mg',
            'restriction_formula' => '30 tab/bulan',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'formula' => 'susp 100 mg/5 mL',
            'restriction_formula' => '1 btl/kasus',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
        DB::table('medicines')->insert([
            'generic_name' => 'ibuprofen*',
            'formula' => 'susp 200 mg/5 mL',
            'restriction_formula' => '1 btl/kasus',
            'description' => '',
            'category_id' => 2,
            'faskes_tk1' => 1,
            'faskes_tk2' => 1,
            'faskes_tk3' => 1,
        ]);
    }
}
