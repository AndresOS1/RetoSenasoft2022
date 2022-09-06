<?php

namespace App\Http\Controllers;

use App\Models\Cartas;
use Illuminate\Http\Request;

class CartasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $jugadores = 4;

        // $cantCartas  = Cartas::count(); 

        // $cartasXjugador = $cantCartas/$jugadores;

        // var_dump($cartasXjugador);

        // $c = 1;
        
        // $f=[];

        // $cartas = [];


        // for($i=0; $i<$jugadores; $i + 1){
        //     // for($j=0; $j<$cartasXjugador; $j++){

        //     //     $f[$i];
        //     //     // $c++;
                
        //     // }
        //     $jugadores[$i];

        // }
        
        $cartas = Cartas::OrderbyRaw('rand()')->take(4)->get();

        
        
        // $cartas = Cartas::all();

        // for ($i = 0; $i < $cartas->count(); $i + 1){
        //     $cartas->get($i)->OrderbyRaw('rand()')->take(4)->get();
  
           
        // }

      
        // return $cartas;
        
        return view('juego', compact('cartas'));
    }

    public function cartaAleatoria(){

        return  Cartas::OrderbyRaw('rand()')->take(4)->get();
         
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
     * @param  \App\Models\Cartas  $cartas
     * @return \Illuminate\Http\Response
     */
    public function show(Cartas $cartas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartas  $cartas
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartas $cartas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartas  $cartas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartas $cartas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartas  $cartas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartas $cartas)
    {
        //
    }
}
