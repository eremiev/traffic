<?php

namespace App\Queries\Station;


use DB;
use App\City;

class Store
{
    public function run($inputs)
    {
        DB::beginTransaction();

        $city = City::find($inputs['city']);

        $city->stations()->create([
            'name' => $inputs['address'],
            'street' => $inputs['url'],
            'like' => 0
        ]);
        $counts = $city->stations->count();
        $city->update(['counts' => $counts]);
        DB::commit();
    }
}