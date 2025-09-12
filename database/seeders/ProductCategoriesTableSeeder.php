<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Drink',
                'created_at' => NULL,
                'updated_at' => '2025-09-12 13:05:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Food',
                'created_at' => NULL,
                'updated_at' => '2025-09-12 13:05:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Home & Kitchen',
                'created_at' => NULL,
                'updated_at' => '2025-09-12 13:05:51',
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Beauty & Personal Care',
                'created_at' => '2025-09-12 13:06:01',
                'updated_at' => '2025-09-12 13:06:01',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Pet Supplies',
                'created_at' => '2025-09-12 13:06:08',
                'updated_at' => '2025-09-12 13:06:08',
            ),
        ));
        
        
    }
}