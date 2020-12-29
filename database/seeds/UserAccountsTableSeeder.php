<?php

use App\User;
use App\UserAccount;
use Illuminate\Database\Seeder;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserAccount::class, 1)->create([
            'email' => 'client1@user.com',
            'account_id' => 1
        ]);

        factory(UserAccount::class, 1)->create([
            'email' => 'client2@user.com',
            'account_id' => 2
        ]);
    }
}
