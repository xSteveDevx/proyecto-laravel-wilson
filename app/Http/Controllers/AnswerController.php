<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function index(Request $request)
    {
        $posts = Article::all();
        $id_p = filter_var($request->path(), FILTER_SANITIZE_NUMBER_INT);
        $id_p = abs($id_p);
        return view('yarn-answer', compact('id_p', 'posts'));
    }
    public function store(Request $request)
    {
        $answer = new Answer();
        if ($request->user()) {
        $answer->id_user = $request->user()->id;
        $answer->id_post =$request->post('id_p');
        $answer->answer = $request->post('answer');
        $answer->save();
        }
        return redirect('/principal')->with('message', 'añadido con éxito');
    }
}
