<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    //
    public function entorno(){
    // SELECT partida.id_partida , users.id
    //        from partida
    //        INNER JOIN users on users.id = partida.user_id
    //        where partida.user_id = 1
      $idpartida=Partida::select('partida.id_partida')
                ->join('users','users.id','=','partida.user_id')
                ->where('partida.user_id','=',Auth()->User()->id)->first();
    return view('home',compact('idpartida'));

    }

}
