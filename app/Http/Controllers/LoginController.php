<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Auth;
use Alert;
use Hash;
class LoginController extends Controller
{
    //
    public function verLogin(){
        return view('Auth.Login');
    }
    public function Login(Request $request ){
        if($user=User::where('email','=',$request->email)->first()){
            if(Hash::check($request->password,$user->password)){
            $credenciales=[
                'email'=>$request->email,
                'password'=>$request->password,
            ];
            if(Auth::attempt($credenciales)){
                    $token=$user->createToken('auth_token')->plainTextToken;
                    Alert::success('Iniciaste session correctamente');
                    return redirect()->route('home'); 
            }else{
                Alert::error('Iniciaste sesion correctamente');
                return redirect()->route('verLogin');
            }
            }else{
                Alert::error('Contraseña incorrecta');
                return redirect()->route('verLogin');
            }
        }else{
            Alert::error('El correo no existe');
            return redirect()->route('verLogin');
        }
    }

    public function logout(){
         Auth::logout();
         Alert::warning('Cerraste sesion');
         return redirect()->route('verLogin');
    }
}
