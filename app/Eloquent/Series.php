<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'desc', 'display'
    ];

    public function seriesList()
    {
        return $this->hasMany('App\Eloquent\SeriesList', 'series_id', 'id');
    }
}
