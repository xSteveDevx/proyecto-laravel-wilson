<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $post = new Article();
        if ($request->user()) {
            $post->id_user = $request->user()->id;
            $post->name_user = $request->user()->full_name;
            $post->title = $request->post('title');
            $post->text_post = $request->post('text_post');
            $post->save();
        }
        return redirect('principal')->with('message', 'añadido, con exito');
    }
   
}