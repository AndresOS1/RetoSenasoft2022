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
    public function gg(){
        //$players=6;
        ////creo un array con toda la baraja de cartas existentes
        // $deck = array(
        //     'AD', '2D', '3D', '4D', '5D', '6D', '7D', '8D', '9D', 'TD', 'JD', 'QD', 'KD',
        //     'AC', '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', 'TC', 'JC', 'QC', 'KC',
        //     'AH', '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H', 'TH', 'JH', 'QH', 'KH',
        //     'AS', '2S', '3S', '4S', '5S', '6S', '7S', '8S', '9S', 'TS', 'JS', 'QS', 'KS'
        // );

        ////desordeno la baraja de cartas y regreso un bool con la funcion shuffle
        // shuffle($deck);

        /////dejo una variable declarada como arra "$player_card"
        // $player_card = array();

        /////ingreso datos en secciones 13 cartas cada una de las secciones
        // $player_card = array_chunk($deck, 13);

        /////declaro el numero de secciones en la que se va a guradar datos
        // $player_card = [[1],[2],[3],[4]];
        
        ////un siclo que se va a reptir con el numero de cartas
        // for($i = 0; $i < count($deck); $i++){
        //         ///
        //         $r=0;
        //         $player_card[$i % 4][] = $deck[$i];
        //         $r++;
        //         $r=$player_card;
                
        // }
        // return $player_card; 

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
