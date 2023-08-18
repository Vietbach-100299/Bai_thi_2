<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            Channel::create([
                'ChannelName' => $faker->name,
                'Description' => $faker->paragraph,
                'SubscribersCount' => $faker->numberBetween($min = 1, $max = 1000),
                'URL'=>$faker->url,
            ]);
        }
    }
}
