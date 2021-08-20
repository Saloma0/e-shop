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
                'name'=>'LG mobile',
                'price'=>'12000',
                'category'=>'mobile',
                'description'=>'O melhor telefone de todos',
                'gallery'=>'https://www.pinclipart.com/picdir/big/201-2019042_bag-buy-mall-merchandise-purchase-shop-spree-merchandise.png',
            ],

            [
                'name'=>'Ctrina',
                'price'=>'12000',
                'category'=>'mobile',
                'description'=>'O melhor telefone de todos',
                'gallery'=>'https://www.pinclipart.com/picdir/big/201-2019042_bag-buy-mall-merchandise-purchase-shop-spree-merchandise.png',
            ],

            [
                'name'=>'Large Thumb',
                'price'=>'12000',
                'category'=>'mobile',
                'description'=>'O melhor telefone de todos',
                'gallery'=>'https://www.pinclipart.com/picdir/big/201-2019042_bag-buy-mall-merchandise-purchase-shop-spree-merchandise.png',
            ],
            [
                'name'=>'Iphone',
                'price'=>'12000',
                'category'=>'mobile',
                'description'=>'O melhor telefone de todos',
                'gallery'=>'https://www.pinclipart.com/picdir/big/201-2019042_bag-buy-mall-merchandise-purchase-shop-spree-merchandise.png',
            ]

            ]
            );

    }
}
