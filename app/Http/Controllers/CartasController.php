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
        $players =  array(['Andres'],['Pepito'],['Juan'],['Camilo']);

        $baraja1 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja2 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja3 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja4 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $deck = array($baraja1, $baraja2, $baraja3, $baraja4);
        
        shuffle($deck);
        
        $player_card = array();

        $cd = array();
        
        shuffle($deck);
        $player_card = array_chunk($deck, 2);
    
        $player_card = $players;
        for($i = 0; $i < count($deck); $i++){
                $player_card[$i % count($players)][] = $deck[$i];

        }

        // dd($cd) ; 

        // return $cd;
        // return $player_card;


    //     for ($i = 0; $i < count($deck); $i++){
    //         // $cd = $player_card[$i];
    //          for ($j = 0; $j < count($deck[$i]); $j++){
    //             $cd = $deck[$i][$j];
               
    //     }
    // }
        
        // return response()->json($player_card);
        // return $cd;  
        // echo '<pre>' , print_r($player_card) , '</pre>';
        // var_dump( $player_card);
        

        // foreach ($player_card as $player){

        //     return $player->
        // }
        // return $player_card;
        if($player_card[0][1][0]->modelo == $player_card[2][1][0]->modelo){
           
            dd('hola');

        }    


          

        // for($i = 0; $i < count($player_card); $i++){

        //     dd($player_card[$i]);
        // }
        // foreach($player_card as $player){
        //     dd($player);
        // }
        
        return view('juego', compact('player_card','cartas'));
    }

    public function cartaAleatoria(){

        return  Cartas::OrderbyRaw('rand()')->take(4)->get();
         
    }
    public function gg(){
        
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
        $players =  array(['Andres'],['Pepito'],['Juan'],['Camilo']);

        $baraja1 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja2 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja3 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $baraja4 =  Cartas::OrderbyRaw('rand()')->take(4)->get();
        $deck = array($baraja1, $baraja2, $baraja3, $baraja4);
        
        shuffle($deck);
        
        $player_card = array();

        $cd = array();
        
        shuffle($deck);
        $player_card = array_chunk($deck, 2);
    
        $player_card = $players;
        for($i = 0; $i < count($deck); $i++){
                $player_card[$i % count($players)][] = $deck[$i];

        }

        // dd($cd) ; 

        // return $cd;
        // return $player_card;


    //     for ($i = 0; $i < count($deck); $i++){
    //         // $cd = $player_card[$i];
    //          for ($j = 0; $j < count($deck[$i]); $j++){
    //             $cd = $deck[$i][$j];
               
    //     }
    // }
        
        return response()->json($player_card);
        // return $cd;  
        // echo '<pre>' , print_r($player_card) , '</pre>';
        // var_dump( $player_card);
        

        // foreach ($player_card as $player){

        //     return $player->
        // }
        // return $player_card;
        // if($player_card[0][1][0]->modelo == $player_card[2][1][0]->modelo){
           
        //     dd('hola');

        // }    


          

        // for($i = 0; $i < count($player_card); $i++){

        //     dd($player_card[$i]);
        // }
        // foreach($player_card as $player){
        //     dd($player);
        // }
        
        // return view('juego', compact('player_card','cartas'));

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
