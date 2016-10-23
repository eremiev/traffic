<?php

use App\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'name' => 'София',
                'counts' => 0
            ],
            [
                'name' => 'Пловдив',
                'counts' => 0
            ],
            [
                'name' => 'Бургас',
                'counts' => 0
            ],
            [
                'name' => 'Варна',
                'counts' => 0
            ],
        ];

        // $this->truncate('city');

        foreach ($cities as $city) {

            City::create([
                'name' => $city['name'],
                'counts' => $city['counts']
            ]);
        }
    }
}
