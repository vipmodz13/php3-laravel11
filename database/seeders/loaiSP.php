<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class loaiSP extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaiSP')->insert([
            ['tenLoai' => 'Sam sung', 'thuTu' => 1, 'anHien' => 1],
            ['tenLoai' => 'HTC', 'thuTu' => 2, 'anHien' => 1],
            ['tenLoai' => 'Apple', 'thuTu' => 3, 'anHien' => 1],
            ['tenLoai' => 'LG', 'thuTu' => 4, 'anHien' => 1],
            ['tenLoai' => 'Oppo', 'thuTu' => 5, 'anHien' => 1],
        ]);
    }
}
