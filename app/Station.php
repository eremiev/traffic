<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'street',
        'like'
    ];

    /**
     * Get the city that owns the station.
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
