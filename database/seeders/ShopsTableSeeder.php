<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Shop 1',
                'photo' => 'shops/Xc0LnlFHpdm8HAVZmglWvNRzs66jbdfsIKpT1bU9.jpg',
                'phone' => NULL,
                'note' => NULL,
                'created_at' => '2025-09-12 12:42:56',
                'updated_at' => '2025-09-12 12:42:56',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Shop 2',
                'photo' => '',
                'phone' => NULL,
                'note' => NULL,
                'created_at' => '2025-09-12 12:53:36',
                'updated_at' => '2025-09-12 12:53:36',
            ),
        ));
        
        
    }
}