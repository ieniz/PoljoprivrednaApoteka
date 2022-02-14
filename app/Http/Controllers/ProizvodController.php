<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Proizvod;
use Illuminate\Http\Request;

class ProizvodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proizvods = DB::table('proizvods')
        ->get();
       return view('proizvodi.index', ['proizvods' => $proizvods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brends = DB::table('brends')
        ->get();
     return view('proizvodi.dodaj',['brends'=> $brends]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function spremi(Request $request)
    {
        $request->validate([
            'naziv' =>'required|string|max:255'
        ]);

        DB::table('proizvods')->insert([

'naziv'=>$request->naziv,
'kod'=>$request->kod,
'proizvodnja'=>$request->proizvodnja,
'cjena'=>$request->cjena,
'brend'=>$request->brend,
'tipproizvoda'=>$request->tipproizvoda,

        ]);
        return redirect() -> route('proizvodi');
    }

public function obrisi(Request $request)
{$id=$request->id;
    Proizvod::destroy($id);
    return redirect() -> route('proizvodi');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function show(Proizvod $proizvod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $proizvods=DB::table('proizvods')
        ->where('id',$id)
        ->get();
        
        $brends=DB::table('brends')
        ->get();
        
        return view('proizvodi.edit',['proizvods'=>$proizvods,'brends'=>$brends]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function azuriraj(Request $request)
    {
        $id= $request->id;
        $request->validate([
        'naziv'=> 'required|string|max:255',
        'cjena'=> 'required|integer',
        
        ]);
        $update_query= DB::table('proizvods')
        ->where('id',$id)
        ->update([
            'naziv'=> $request->naziv,
            'kod'=>$request->kod,
            'proizvodnja'=> $request->proizvodnja,
            'cjena'=> $request->cjena,
            'brend'=> $request->brend,
            'tipproizvoda'=> $request->tipproizvoda,
        ]);
        return redirect() -> route('proizvodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proizvod  $proizvod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proizvod $proizvod)
    {
        //
    }
}
