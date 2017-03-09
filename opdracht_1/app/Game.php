<?php

namespace IPMEDT5;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    /**
     * Verkrijg games op basis van de platform slug.
     *
     * @param $query
     * @param $platform_slug
     * @return mixed
     */
    public function scopeConsole($query, $platform_slug)
    {
        return $query->where('platform_slug', $platform_slug);
    }

    /**
     * Verkrijg alle games na het jaar 2000.
     *
     * @param $query
     * @return mixed
     */
    public function scopeYear($query)
    {
        return $query->where('release', '>', Carbon::create(2000));
    }

    /**
     * Verkrijg games van de huidige generatie consoles.
     *
     * @param $query
     * @return mixed
     */
    public function scopeOldGen($query)
    {
        $generation = [
            str_slug('Playstation 4'),
            str_slug('Nintendo Switch')
        ];

        return $query->whereNotIn('platform_slug', $generation);
    }
}
