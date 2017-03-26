<?php

namespace IPMEDT5\Http\Controllers;

use Illuminate\Http\Request;
use IPMEDT5\Beer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->with(['beers' => Beer::all()->toArray()]);
    }
}
