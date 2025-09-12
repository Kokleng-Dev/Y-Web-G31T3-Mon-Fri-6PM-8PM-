<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_features')->delete();
        
        \DB::table('permission_features')->insert(array (
            0 => 
            array (
                'id' => 3,
                'permission_id' => 1,
                'name' => 'View',
                'key' => 'view',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'permission_id' => 1,
                'name' => 'Create',
                'key' => 'create',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'permission_id' => 1,
                'name' => 'Edit',
                'key' => 'edit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'permission_id' => 1,
                'name' => 'Delete',
                'key' => 'delete',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'permission_id' => 2,
                'name' => 'View',
                'key' => 'view',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'permission_id' => 2,
                'name' => 'Create',
                'key' => 'create',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'permission_id' => 2,
                'name' => 'Edit',
                'key' => 'edit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'permission_id' => 2,
                'name' => 'Delete',
                'key' => 'delete',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 15,
                'permission_id' => 4,
                'name' => 'View',
                'key' => 'view',
                'created_at' => '2025-09-12 12:06:53',
                'updated_at' => '2025-09-12 12:06:53',
            ),
            9 => 
            array (
                'id' => 16,
                'permission_id' => 4,
                'name' => 'Create',
                'key' => 'create',
                'created_at' => '2025-09-12 12:06:58',
                'updated_at' => '2025-09-12 12:06:58',
            ),
            10 => 
            array (
                'id' => 17,
                'permission_id' => 4,
                'name' => 'Edit',
                'key' => 'edit',
                'created_at' => '2025-09-12 12:07:02',
                'updated_at' => '2025-09-12 12:07:02',
            ),
            11 => 
            array (
                'id' => 18,
                'permission_id' => 4,
                'name' => 'Delete',
                'key' => 'delete',
                'created_at' => '2025-09-12 12:07:08',
                'updated_at' => '2025-09-12 12:07:08',
            ),
            12 => 
            array (
                'id' => 19,
                'permission_id' => 5,
                'name' => 'View',
                'key' => 'view',
                'created_at' => '2025-09-12 12:07:14',
                'updated_at' => '2025-09-12 12:07:14',
            ),
            13 => 
            array (
                'id' => 20,
                'permission_id' => 5,
                'name' => 'Create',
                'key' => 'create',
                'created_at' => '2025-09-12 12:07:18',
                'updated_at' => '2025-09-12 12:07:18',
            ),
            14 => 
            array (
                'id' => 21,
                'permission_id' => 5,
                'name' => 'Edit',
                'key' => 'edit',
                'created_at' => '2025-09-12 12:07:21',
                'updated_at' => '2025-09-12 12:07:21',
            ),
            15 => 
            array (
                'id' => 22,
                'permission_id' => 5,
                'name' => 'Delete',
                'key' => 'delete',
                'created_at' => '2025-09-12 12:07:26',
                'updated_at' => '2025-09-12 12:07:26',
            ),
            16 => 
            array (
                'id' => 23,
                'permission_id' => 6,
                'name' => 'View',
                'key' => 'view',
                'created_at' => '2025-09-12 12:55:58',
                'updated_at' => '2025-09-12 12:55:58',
            ),
            17 => 
            array (
                'id' => 24,
                'permission_id' => 6,
                'name' => 'Create',
                'key' => 'create',
                'created_at' => '2025-09-12 12:56:02',
                'updated_at' => '2025-09-12 12:56:02',
            ),
            18 => 
            array (
                'id' => 25,
                'permission_id' => 6,
                'name' => 'Edit',
                'key' => 'edit',
                'created_at' => '2025-09-12 12:56:06',
                'updated_at' => '2025-09-12 12:56:06',
            ),
            19 => 
            array (
                'id' => 26,
                'permission_id' => 6,
                'name' => 'Delete',
                'key' => 'delete',
                'created_at' => '2025-09-12 12:56:09',
                'updated_at' => '2025-09-12 12:56:09',
            ),
        ));
        
        
    }
}