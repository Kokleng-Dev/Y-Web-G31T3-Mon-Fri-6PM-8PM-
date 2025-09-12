<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_permissions')->delete();
        
        \DB::table('role_permissions')->insert(array (
            0 => 
            array (
                'id' => 36,
                'role_id' => 1,
                'permission_id' => 1,
                'permission_feature_id' => 3,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            1 => 
            array (
                'id' => 37,
                'role_id' => 1,
                'permission_id' => 1,
                'permission_feature_id' => 4,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            2 => 
            array (
                'id' => 38,
                'role_id' => 1,
                'permission_id' => 1,
                'permission_feature_id' => 5,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            3 => 
            array (
                'id' => 39,
                'role_id' => 1,
                'permission_id' => 1,
                'permission_feature_id' => 6,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            4 => 
            array (
                'id' => 40,
                'role_id' => 1,
                'permission_id' => 2,
                'permission_feature_id' => 7,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            5 => 
            array (
                'id' => 41,
                'role_id' => 1,
                'permission_id' => 2,
                'permission_feature_id' => 8,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            6 => 
            array (
                'id' => 42,
                'role_id' => 1,
                'permission_id' => 2,
                'permission_feature_id' => 9,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            7 => 
            array (
                'id' => 43,
                'role_id' => 1,
                'permission_id' => 2,
                'permission_feature_id' => 10,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            8 => 
            array (
                'id' => 45,
                'role_id' => 1,
                'permission_id' => 4,
                'permission_feature_id' => 16,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            9 => 
            array (
                'id' => 46,
                'role_id' => 1,
                'permission_id' => 4,
                'permission_feature_id' => 17,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            10 => 
            array (
                'id' => 47,
                'role_id' => 1,
                'permission_id' => 4,
                'permission_feature_id' => 18,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            11 => 
            array (
                'id' => 49,
                'role_id' => 1,
                'permission_id' => 5,
                'permission_feature_id' => 20,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            12 => 
            array (
                'id' => 50,
                'role_id' => 1,
                'permission_id' => 5,
                'permission_feature_id' => 21,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            13 => 
            array (
                'id' => 51,
                'role_id' => 1,
                'permission_id' => 5,
                'permission_feature_id' => 22,
                'created_at' => '2025-09-12 12:07:58',
                'updated_at' => '2025-09-12 12:07:58',
            ),
            14 => 
            array (
                'id' => 52,
                'role_id' => 1,
                'permission_id' => 4,
                'permission_feature_id' => 15,
                'created_at' => '2025-09-12 12:10:35',
                'updated_at' => '2025-09-12 12:10:35',
            ),
            15 => 
            array (
                'id' => 53,
                'role_id' => 2,
                'permission_id' => 4,
                'permission_feature_id' => 15,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            16 => 
            array (
                'id' => 54,
                'role_id' => 2,
                'permission_id' => 4,
                'permission_feature_id' => 16,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            17 => 
            array (
                'id' => 55,
                'role_id' => 2,
                'permission_id' => 4,
                'permission_feature_id' => 17,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            18 => 
            array (
                'id' => 56,
                'role_id' => 2,
                'permission_id' => 4,
                'permission_feature_id' => 18,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            19 => 
            array (
                'id' => 57,
                'role_id' => 2,
                'permission_id' => 5,
                'permission_feature_id' => 19,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            20 => 
            array (
                'id' => 58,
                'role_id' => 2,
                'permission_id' => 5,
                'permission_feature_id' => 20,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            21 => 
            array (
                'id' => 59,
                'role_id' => 2,
                'permission_id' => 5,
                'permission_feature_id' => 21,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            22 => 
            array (
                'id' => 60,
                'role_id' => 2,
                'permission_id' => 5,
                'permission_feature_id' => 22,
                'created_at' => '2025-09-12 12:11:13',
                'updated_at' => '2025-09-12 12:11:13',
            ),
            23 => 
            array (
                'id' => 61,
                'role_id' => 1,
                'permission_id' => 5,
                'permission_feature_id' => 19,
                'created_at' => '2025-09-12 12:18:27',
                'updated_at' => '2025-09-12 12:18:27',
            ),
            24 => 
            array (
                'id' => 62,
                'role_id' => 1,
                'permission_id' => 6,
                'permission_feature_id' => 23,
                'created_at' => '2025-09-12 12:56:18',
                'updated_at' => '2025-09-12 12:56:18',
            ),
            25 => 
            array (
                'id' => 63,
                'role_id' => 1,
                'permission_id' => 6,
                'permission_feature_id' => 24,
                'created_at' => '2025-09-12 12:56:18',
                'updated_at' => '2025-09-12 12:56:18',
            ),
            26 => 
            array (
                'id' => 64,
                'role_id' => 1,
                'permission_id' => 6,
                'permission_feature_id' => 25,
                'created_at' => '2025-09-12 12:56:18',
                'updated_at' => '2025-09-12 12:56:18',
            ),
            27 => 
            array (
                'id' => 65,
                'role_id' => 1,
                'permission_id' => 6,
                'permission_feature_id' => 26,
                'created_at' => '2025-09-12 12:56:18',
                'updated_at' => '2025-09-12 12:56:18',
            ),
        ));
        
        
    }
}