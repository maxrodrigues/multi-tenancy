<?php

use App\User;
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
        factory(User::class, 1)->create([
            'email' => 'client1@user.com',
            'account_id' => 1
        ]);

        factory(User::class, 1)->create([
            'email' => 'client2@user.com',
            'account_id' => 2
        ]);
    }
}
