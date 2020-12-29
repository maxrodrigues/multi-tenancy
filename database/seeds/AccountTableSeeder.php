<?php

use App\Account;
use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        #factory(Account::class, 2)->create();
        factory(Account::class, 1)->create([
            'subdomain' => 'client1'
        ]);

        factory(Account::class, 1)->create([
            'subdomain' => 'client2'
        ]);
    }
}
