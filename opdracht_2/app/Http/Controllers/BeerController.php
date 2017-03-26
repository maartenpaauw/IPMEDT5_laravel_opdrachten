<?php

namespace IPMEDT5\Http\Controllers;

use IPMEDT5\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Beer::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'       => 'required',
            'percentage' => 'required|numeric|between:0,100'
        ]);

        $name       = $request->input('name');
        $persentage = $request->input('percentage') / 100;

        $beer = Beer::create([
            'name'       => $name,
            'percentage' => $persentage
        ]);

        return redirect(route('beers.edit', $beer->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \IPMEDT5\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return $beer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \IPMEDT5\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit')->with(['beer' => $beer->toArray()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \IPMEDT5\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $this->validate($request, [
            'name'       => 'required',
            'percentage' => 'required|between:0,100'
        ]);

        $beer->name       = $request->input('name');
        $beer->percentage = $request->input('percentage') / 100;
        $beer->save();

        return redirect(route('beers.edit', $beer->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \IPMEDT5\Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        //
    }

    /**
     * @return mixed
     */
    public function random()
    {
        return Beer::random();
    }

    public function moreThanTenPercent()
    {
        return Beer::moreThanTenPercent()->get();
    }
}
