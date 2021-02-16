<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products=[
            [
                'product_name'=>'AMONIACO X25',
                'sku'=>'BG25',
                'cat_id'=>'1',
                'price_id'=>'1',
                'uom_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'product_name'=>'ANGEL DRY YEAST X20*',
                'sku'=>'CS20',
                'cat_id'=>'1',
                'price_id'=>'1',
                'uom_id'=>'1',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

        ];
        DB::table('products')->insert($products);
    }
}
