<?php

namespace IPMEDT5;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['name', 'percentage'];

    /**
     * @param $percentage
     * @return string
     */
    public function getPercentageAttribute($percentage)
    {
        return number_format($percentage * 100, 1);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeRandom($query)
    {
        return $query->inRandomOrder()->first();
    }

    /**
     * @param $query
     */
    public function scopeMoreThanTenPercent($query)
    {
        return $query->where('percentage', '>', 0.10);
    }
}