<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //La pagina  del inicio
    public function index(){
        return view('login');
    }
    //formulario donde se crean los datos
    public function create(){
        return view('sign-in');
    }
    //donde se guardan los datos
    public function store(Request $request){
        $user = new User();
        $user -> email =$request->post('email');
        $user -> password =bcrypt($request->post('password'));
        $user -> full_name =$request->post('full_name');
        $user -> phone =$request->post('phone');
        $user -> save();
        return redirect()->route('index')->with("success","agregado con éxito");
    }
}
