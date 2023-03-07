<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required', 
                
            ]);
            
        $credentials = $request->only(['email', 'password']);
        if(Auth::attempt($credentials)){ 
        
        return redirect('/principal'); 
        
        } 
        
        return redirect('/')->with('message', 'Usuario o contraseña incorrecto');
        
        } 
}
