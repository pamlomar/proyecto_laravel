<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class BuscarPostsController extends Controller
{
    public function buscar(Request $request)
    {
        if ($request->isMethod('post')) {
            $cadena=$request->input('cadena');

            $posts = Post::where('titulo', 'like', "%$cadena%")->orWhere('descripcion', 'like', '%'.$cadena.'%')->get();

            return view('home')->with('posts', $posts);

        }
    }
}