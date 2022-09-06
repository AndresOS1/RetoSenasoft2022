<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Alert;
use Hash;
use Validator;
class RegisterController extends Controller
{
    //
    public function verRegister(){
        return view('Auth.Register');
    }
    public function Register(Request $request){
         $validate=Validator::make($request->all(),[
                   'name'=>'required',
                   'email'=>'required',
                   'password'=>'required',
         ]);
         if(!$user=User::where('email','=',$request->email)->first()){
            if($validate){
                $user=new User;
                $user->name=$request->name;
                $user->email=$request->email;
                $user->password=Hash::make($request->password);
                $user->save();  
                Alert::success('usuario creado correcta mente');
                return redirect()-> route('verLogin');
            }else{
                Alert::error('se guardo mal un campo');
                return redirect()->route('verRegister');
            }
         }else{
            Alert::error('el email ya existe');
            return redirect()->route('verRegister');
         }
    }
}

