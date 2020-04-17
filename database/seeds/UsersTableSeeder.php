<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'first_name' => 'Admin',
            'last_name' => 'Manager',
            'email' => 'sovonthy1@gmail.com',
            'password' => bcrypt('admin'),
            'address' => 'Phnom Penh',
            'position' => 'Manager',
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'first_name' => 'Author',
            'last_name' => 'Trainer',
            'email' => 'sovonthy2@gmail.com',
            'password' => bcrypt('author'),
            'address' => 'Phnom Penh',
            'position' => 'Trainer',
        ]);
    }
}
