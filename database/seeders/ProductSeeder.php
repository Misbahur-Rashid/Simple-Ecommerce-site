<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iPhone13',
                "price" => "$800",
                "description" => "smartphone with the 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://www.notebookcheck.net/Apple-iPhone-13-Pro-Review-Bombastic-smartphone-with-minor-weaknesses.572211.0.html#7963184"
            ],
            [
                'name' => 'Pixel 5A 5G',
                "price" => "$400",
                "description" => "smartphone with the 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://diamu.com.bd/product/google-pixel-5-5g/"
            ],
            [
                'name' => 'oppo',
                "price" => "$100",
                "description" => "smartphone with the 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://www.xda-developers.com/files/2021/04/DSC04479.jpg"
            ],
            [
                'name' => 'Xiomee',
                "price" => "$150",
                "description" => "smartphone with the 4gb ram and much more features",
                "category" => "mobile",
                "gallery" => "https://www.notebookcheck.net/Oppo-A16s-smartphone-review-Inexpensive-endurance-runner-with-NFC.575750.0.html#8006591"
            ]


        ]);
    }
}
