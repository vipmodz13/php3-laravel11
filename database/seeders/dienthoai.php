<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class dienthoai extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        
        $products = [
            'Oppo XA',
            'Iphone XS Max',
            'Nokia Pro'
        ];

        for ($i = 0; $i < 300; $i++) {
            $product = $products[array_rand($products)];
            $price = 0;

            switch ($product) {
                case 'Oppo XA':
                    $price = rand(700000, 1000000);
                    break;
                case 'Iphone XS Max':
                    $price = rand(500000, 800000);
                    break;
                case 'Nokia Pro':
                    $price = rand(250000, 500000);
                    break;
            }

            DB::table('dienthoai')->insert([
                'tenDT' => $product,
                'gia' => $price,
                'moTa' => $faker->sentence,
                'ngayCapNhat' => now(),
                'baiViet' => $faker->text,
                'ghiChu' => $faker->sentence,
                'urlHinh' => $faker->imageUrl(640, 480),
                'soLuongTonKho' => rand(1, 100),
                'hot' => rand(0, 1),
                'anHien' => 1,
                'idLoai' => rand(1, 5), // Giả định bạn có các loại sản phẩm từ 1 đến 10
            ]);
        }
    }
}
