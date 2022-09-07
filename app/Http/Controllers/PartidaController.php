<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;
use Auth;
use App\Models\User;
use Alert;  
class PartidaController extends Controller
{
    //
    public function create(Request $request){
          
          $partida=new Partida;
          $partida->user_id=Auth()->User()->id;
        //   $partida->user_id=1;
          $h=0;
          for($i=0;$i<9;$i++){
            $random = dechex(rand(1,100));
            $h=$random;
          }
          $partida->password=$random;
          $partida->save();
          Alert::success('Partida crada satisfactoriamente');
          return  redirect()->route('juego');
          $partida->password;
          $patida->save();
    } 


    public function show( Request $request){
          if($password=Partida::where('password','=',$request->password)->first()){
            $password=Partida::select('id_partida')
                               ->where('password','=',$request->password)
                               ->get();
             $partida=Partida::find($password);
             return $partida;
             
          }else{
            Alert::error('no existe tal partida ');
            return redirect()->route('home');
          }

    }
}
