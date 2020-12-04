<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => Str::random(10),
            'email' => 'client1@user.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => Str::random(10),
            'email' => 'client2@user.com',
            'password' => Hash::make('password'),
        ]);
    }
}
