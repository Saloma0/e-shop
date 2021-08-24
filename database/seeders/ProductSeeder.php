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
                'name'=>'INDIVI SOFA',
                'price'=>'750.800',
                'category'=>'As estações passam e as tendências vêm e vão, mas a elegância moderna do sofá Indivi é atemporal. ',
                'description'=>'O melhor telefone de todos',
                'gallery'=>'https://www.boconcept.com/on/demandware.static/-/Sites-master-catalog/default/dwd633af54/images/700000/704909.jpg',
            ],

            [
                'name'=>'OSAKA SOFA',
                'price'=>'1.810.000',
                'category'=>'sofa',
                'description'=>'Uma aparência leve e proporções estreitas tornam o sofá Osaka perfeito para pequenas casas.',
                'gallery'=>'https://images.demandware.net/dw/image/v2/BBBV_PRD/on/demandware.static/-/Sites-master-catalog/default/dwbd0581f9/images/1310000/1310943.jpg?sw=1600',
            ],

        

            ]
            );

    }
}
