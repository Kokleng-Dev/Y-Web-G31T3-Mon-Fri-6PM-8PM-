<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'John doe',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$86N1wgSXDr5mrHSNDFgAF.ev6DUe4f4bI8W5Ul8eIsC1j7f0rbkYu', #123123123
                'remember_token' => NULL,
                'created_at' => '2025-08-28 11:50:52',
                'updated_at' => '2025-08-28 11:50:52',
                'role_id' => 1,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'test',
                'email' => 'test@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$R9UprUWv7nSPlGoPL2TPROunD1Bzpcg7.9pUEAUo7MchbsJUcWOCG',
                'remember_token' => NULL,
                'created_at' => '2025-09-12 12:10:54',
                'updated_at' => '2025-09-12 12:10:54',
                'role_id' => 2,
            ),
        ));
        
        
    }
}
