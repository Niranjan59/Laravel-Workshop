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
        //
        DB::table('products')->insert([
            [
                'name' => 'Iphone 12',
                "price" => "123000",
                "description" => "Portable device with flexible binding",
                "category" => "mobile",
                "gallery" => "https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-12-r1.jpg"
            ],
            [
                'name' => 'Ekster Parliament Smart Wallet',
                "price" => "193000",
                "description" => "The Ekster Parliament is a smart bifold wallet with RFID coating",
                "category" => "wallet",
                "gallery" => "https://m.media-amazon.com/images/I/51MhA--96hL._AC_SY355_.jpg"
            ],
            [
                'name' => 'Peak Design Tech Pouch',
                "price" => "79300",
                "description" => "The Peak Design Tech Pouch is a stylish and exceptionally made",
                "category" => "pouch",
                "gallery" => "https://m.media-amazon.com/images/I/619t1EVwrML._AC_SL1024_.jpg"
            ],
            [
                'name' => 'Anker 737 Power Bank',
                "price" => "21300",
                "description" => "Anker’s 737 Power Bank can charge your laptop via a fast USB",
                "category" => "powerbank",
                "gallery" => "https://m.media-amazon.com/images/I/71Linf+GHuL._AC_SL1500_.jpg"
            ],

        

            
            [
                'name' => 'Oppo mobile',
                "price" => "85700",
                "description" => "A smartphone with 8gb ram and much more feature",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name' => 'Zyllion Shiatsu Back and Neck Massager',
                "price" => "39000",
                "description" => "There's nothing better than a good massage",
                "category" => "massager",
                "gallery" => "https://m.media-amazon.com/images/I/918T44mRPUL._AC_SL1500_.jpg"
            ],
         
            [
                'name' => 'Soni Tv',
                "price" => "500",
                "description" => "A tv with much more feature",
                "category" => "tv",
                "gallery" => "https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name' => 'LG fridge',
                "price" => "200",
                "description" => "A fridge with much more feature",
                "category" => "fridge",
                "gallery" => "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ]
        ]);
    }
}
