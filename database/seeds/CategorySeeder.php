<?php

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
        $amount = 10;

        factory(App\Category::class, $amount)->create();
        $this->command->info('Seeded ' . $amount . ' categories');
    }
}
