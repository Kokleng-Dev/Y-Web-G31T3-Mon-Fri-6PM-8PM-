<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Role',
                'key' => 'role',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'User',
                'key' => 'user',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Product',
                'key' => 'product',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Shop',
                'key' => 'shop',
                'created_at' => '2025-09-12 11:47:35',
                'updated_at' => '2025-09-12 11:52:15',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Product Category',
                'key' => 'product_category',
                'created_at' => '2025-09-12 12:55:48',
                'updated_at' => '2025-09-12 12:55:48',
            ),
        ));
        
        
    }
}