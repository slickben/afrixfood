<?php

namespace Database\Seeders;

use App\Models\food;
use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        food::create([
            'name' => 'jeloff rice',
            'slug' => 'jeloff-rice',
            'details' => 'africa made jeloff rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made jeloff rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'coconut rice',
            'slug' => 'coconut-rice',
            'details' => 'africa made coconut rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made coconut rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'fried rice',
            'slug' => 'fried-rice',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'Eba And awedo',
            'slug' => 'eba-awedo',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'semo and egusi',
            'slug' => 'semp-egusi',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'yam and egg',
            'slug' => 'yam-egg',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'ewa guyin',
            'slug' => 'ewa-guyin',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
        food::create([
            'name' => 'beans and bread',
            'slug' => 'beans-bread',
            'details' => 'africa made fried rice with barbecue chiken and more',
            'price' => 2600,
            'description' => 'africa made fried rice with barbecue chiken and more'
        ]);
    }
}
