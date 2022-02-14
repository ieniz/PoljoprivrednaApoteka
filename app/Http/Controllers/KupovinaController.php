<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Kupovina;
use Illuminate\Http\Request;

class KupovinaController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Najčešće kupljeni proizvodi*/
        $most_common_proizvodi = DB::table('proizvods') 
        ->select('proizvods.*', DB::raw('count(*) as brojac'))
        ->groupBy('proizvods.id')
        ->join('kupovinas','proizvods.id','=','kupovinas.proizvod')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        /*Koji su brendovi najčešći odabir kupaca*/
        $most_common_brendovi = DB::table('proizvods') 
        ->select('brends.*', DB::raw('count(*) as brojac'))
        ->groupBy('brends.id')
        ->join('kupovinas','proizvods.id','=','kupovinas.proizvod')
        ->join('brends','proizvods.id','=','brends.id')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        /*Broj kupovina u određenom vremenu*/
        $from='2022-02-10 00:00:00';
        $to='2022-03-12 15:52:56';      

        $broj_kupovina = DB::table('kupovinas')
        ->whereBetween('datumkupovine',[$from,$to])
        ->count();

         /*Ispis svih kupljenih proizvoda određene cjene */
         $fromC=1;
         $toC=7;
         $prodaje_ispod_cijene1 = DB::table('proizvods')
         ->select('proizvods.naziv as proizvod_naziv', 'proizvods.tipproizvoda as proizvod_tip')
         ->join('kupovinas', 'proizvods.id','=','kupovinas.proizvod')
         ->whereBetween('proizvods.cjena',[$fromC,$toC])               
         ->get();
        
       
        /*Svi proizvodi iz BIH kupljeni određenog datuma*/
        $from='2022-02-10 00:00:00';
        $to='2022-03-12 15:52:56'; 
        $brendovi_njemacki = DB::table('kupovinas')   
        ->groupBy('kupovinas.id')
        ->join('kupacs','kupovinas.kupac','=','kupacs.id')
        ->join('proizvods','kupovinas.proizvod','=','proizvods.id')
        ->join('brends','proizvods.brend','=','brends.id')
        ->select('proizvods.naziv as proizvod_naziv','kupovinas.datumkupovine as kupovina_datumkupovine','brends.porijeklo as brend_porijeklo')
        ->where('brends.porijeklo','BH')
        ->whereBetween('kupovinas.datumkupovine',[$from,$to])
        ->get();

        /*Svi kupljeni proizvodi određene cjene i datuma proizvodnje*/
        $from='2022-02-8 00:00:00';
        $to='2022-02-10 15:52:56'; 
        $fromC=1;
        $toC=8;
        $prodaje_ispod_cijene2 = DB::table('proizvods')
        ->select('proizvods.naziv as proizvod_naziv', 'proizvods.tipproizvoda as proizvod_tip')
        ->join('kupovinas', 'proizvods.id','=','kupovinas.proizvod')
        ->whereBetween('proizvods.cjena',[$fromC,$toC])         
        ->whereBetween('proizvods.proizvodnja',[$from, $to])       
        ->get();


         /*Tip proizvoda koji se najviše prodaje*/      

        $tip_proizvoda = DB::table('proizvods') 
        ->select('proizvods.*', DB::raw('count(*) as brojac'))
        ->groupBy('proizvods.id')
        ->join('kupovinas','proizvods.id','=','kupovinas.proizvod')
        ->orderByRaw('COUNT(*) DESC')
        ->get();

        
         /*Kupci iz određenog grada*/ 
        $kupci_iz_grada= DB::table('kupovinas')

        ->select('kupacs.*','proizvods.naziv as proizvod_naziv','kupovinas.*')
        ->groupBy('kupovinas.id')
        ->join('kupacs', 'kupovinas.kupac','=','kupacs.id')  
        ->join('proizvods', 'kupovinas.proizvod','=','proizvods.id')      
        ->where('kupacs.grad','Cazin')
        ->get();

        /*Kupci iz određenog grada koji su kupili proizvod po nekoj cjeni*/    
        $kupci_iz_grada2= DB::table('kupovinas')

        ->select('kupacs.*','proizvods.naziv as proizvod_naziv','kupovinas.*','proizvods.cjena as proizvod_cijena')
        ->groupBy('kupovinas.id')
        ->join('kupacs', 'kupovinas.kupac','=','kupacs.id')  
        ->join('proizvods', 'kupovinas.proizvod','=','proizvods.id')      
        ->where('kupacs.grad','Bužim')
        ->where('proizvods.cjena','>=',2)
        ->get();
       
        
        /*Najjprodavaniji brendovi proizvoda tipa alata u određenom vremenu a čiji su kupci iz Sarajeva */
        $from='2022-02-8 00:00:00';
        $to='2022-03-10 15:52:56'; 
        $brendovi_kupaca=DB::table('kupovinas')
        ->select('brends.ime as brend_ime','kupacs.*')
        ->groupBy('kupovinas.id')
        ->join('proizvods', 'kupovinas.proizvod','=','proizvods.id')
        ->join('brends', 'proizvods.brend','=','brends.id')
        ->join('kupacs', 'kupovinas.kupac','=','kupacs.id')         
        ->where('kupacs.grad','Sarajevo')  
        ->where('proizvods.tipproizvoda','Ostalo') 
        ->whereBetween('kupovinas.datumkupovine',[$from,$to])
        ->get();
        






        return view('kupovina.index',[ 'most_common_proizvodi'=> $most_common_proizvodi,
                                       'most_common_brendovi'=> $most_common_brendovi,
                                       'broj_kupovina'=> $broj_kupovina,
                                       'prodaje_ispod_cijene1'=>$prodaje_ispod_cijene1,
                                       'brendovi_njemacki'=> $brendovi_njemacki,
                                       'prodaje_ispod_cijene2'=>$prodaje_ispod_cijene2,
                                       'tip_proizvoda'=>$tip_proizvoda,
                                       'kupci_iz_grada'=>$kupci_iz_grada,
                                       'kupci_iz_grada2'=>$kupci_iz_grada2,
                                       'brendovi_kupaca'=> $brendovi_kupaca,
                                       ]);      


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
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function show(Kupovina $kupovina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function edit(Kupovina $kupovina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kupovina $kupovina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kupovina  $kupovina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kupovina $kupovina)
    {
        //
    }
}
