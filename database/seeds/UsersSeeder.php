<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'name' => 'raymart',
                'email' => 'sadmin@gmail.com',
                'username' => 'sadmin',
                'posid' => '1',
                'depid' => '4',
                'role'=>'2',//2:superadmin
                'password' => Hash::make('sadmin'),
                'status' => 'active',
            ],
            [
                'name' => 'raymart',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'posid' => '1',
                'depid' => '4',
                'role'=>'1',
                'password' => Hash::make('admin'),//2:superadmin
                'status' => 'active',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
