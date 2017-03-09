<?php

namespace IPMEDT5\Http\Controllers;

use IPMEDT5\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Game::all();
    }

    /**
     * @param $console
     * @return mixed
     */
    public function console($console)
    {
        return Game::console($console)->get();
    }

    /**
     *
     */
    public function year()
    {
        return Game::year()->get();
    }

    /**
     *
     */
    public function oldGen()
    {
        return Game::oldGen()->get();
    }
}
