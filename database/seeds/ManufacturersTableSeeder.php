<?php

use Illuminate\Database\Seeder;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Manufacturer::class, 20)->create()->each(function ($manufacturer) {
            $amount = rand(0, 5);
            for ($i = 0; $i < $amount; $i++) {
                $manufacturer->carModels()->save(factory(\App\CarModel::class)->make());
            }
        });
    }
}
