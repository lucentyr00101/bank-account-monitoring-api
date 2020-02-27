<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Administrator',
            'last_name' => '1',
            //default format for datetime in mysql is Y-m-d H:i:s
            'birthday' => date('Y-m-d', strtotime('January 31, 1995')),
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
        ]);
    }
}
