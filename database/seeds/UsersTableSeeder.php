<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role'     => 2
        ]);
        User::create([
            'name'     => 'User',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('secret'),
            'role'     => 1
        ]);
    }
}
