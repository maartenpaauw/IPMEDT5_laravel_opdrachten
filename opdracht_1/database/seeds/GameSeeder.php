<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use IPMEDT5\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::insert([
            [
                'naam'          => 'Zelda Breath of the Wild',
                'platform'      => 'Nintendo Switch',
                'platform_slug' => str_slug('Nintendo Switch'),
                'release'       => Carbon::create(2017, 3, 3, 0, 0, 0),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'naam'          => 'Horizon Zero Dawn',
                'platform'      => 'Playstation 4',
                'platform_slug' => str_slug('Playstation 4'),
                'release'       => Carbon::create(2017, 3, 3, 0, 0, 0),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'naam'          => 'Star Wars Battlefront II',
                'platform'      => 'XBox',
                'platform_slug' => str_slug('XBox'),
                'release'       => Carbon::create(2005, 9, 30, 0, 0, 0),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'naam'          => 'Star Wars Galactic Battleground',
                'platform'      => 'PC',
                'platform_slug' => str_slug('PC'),
                'release'       => Carbon::create(2001, 11, 23, 0, 0, 0),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ],
            [
                'naam'          => 'Chrono Trigger',
                'platform'      => 'Nintendo DS',
                'platform_slug' => str_slug('Nintendo DS'),
                'release'       => Carbon::create(1995, 3, 11, 0, 0, 0),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]
        ]);
    }
}
