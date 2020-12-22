<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Category::class, 8)->create([
            'account_id' => 1
        ]);

        factory(Category::class, 11)->create([
            'account_id' => 2
        ]);
    }
}
