<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 10,
                'shop_id' => 2,
                'product_category_id' => 1,
                'name' => 'Product 1',
                'price' => 10.0,
                'photo' => 'products/5YslMLIThuiDMQAsgY47kujCHmDqasM6ZhNQwrgt.jpg',
                'qty' => 12,
                'created_at' => '2025-09-12 12:53:29',
                'updated_at' => '2025-09-12 12:53:29',
            ),
            1 => 
            array (
                'id' => 11,
                'shop_id' => 3,
                'product_category_id' => 3,
                'name' => 'product 2',
                'price' => 14.0,
                'photo' => 'products/uOoy0Wc5gqx5xucsgW9GyxffdoYiEfXLt1BWXnil.jpg',
                'qty' => 12,
                'created_at' => '2025-09-12 12:53:54',
                'updated_at' => '2025-09-12 12:53:54',
            ),
            2 => 
            array (
                'id' => 12,
                'shop_id' => 3,
                'product_category_id' => 2,
                'name' => 'Product 3',
                'price' => 15.0,
                'photo' => 'products/mXWbcYP8ct2Wv6ftykGkhesADMlMeQ6pwJzvgKYA.jpg',
                'qty' => 12,
                'created_at' => '2025-09-12 12:54:08',
                'updated_at' => '2025-09-12 12:54:08',
            ),
        ));
        
        
    }
}