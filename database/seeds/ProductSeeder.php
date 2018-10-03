<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amount = 50;

        factory(App\Product::class, $amount)->create();
        $this->command->info('Seeded ' . $amount . ' products');
    }
}
