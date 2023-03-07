<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post();
        if($request->user()){
            $post -> id_user = $request->user()->id;
            $post -> title =$request->post('title');
            $post -> text_post =$request->post('text_post');
            $post -> save();
        }
        else{
            $id_user = null;
        }
        
        return redirect('principal')-> with ('message', 'añadido con éxito');
    }

}
