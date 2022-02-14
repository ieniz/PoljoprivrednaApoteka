<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Brend;
use Illuminate\Http\Request;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proizvods = DB::table('brends')
        ->get();
       return view('brendovi.index', ['brends' => $proizvods]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function show(Brend $brend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function edit(Brend $brend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brend $brend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brend  $brend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brend $brend)
    {
        //
    }
}
