<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class BuscarPostsController extends Controller
{
    //public function buscar(Request $request)
    //{
        //if ($request->isMethod('post')) {
        //    $cadena=$request->input('cadena');

        //    $posts = Post::where('titulo', 'like', "%$cadena%")->orWhere('descripcion', 'like', '%'.$cadena.'%')->get();

        //    $posts = Post::simplePaginate(5);

        //    return view('home')->with('posts', $posts);

        //}
    //}

    public function buscar(Request $request){


        $cadena = $request->input('cadena');
        $cadena1= $request->input('cadena1');

        $posts = Post::where('titulo', 'like', "%$cadena%")->orWhere('descripcion', 'like', "%$cadena1%")->paginate(1);

        return view('home', ['cadena' => $cadena, 'cadena1' => $cadena1, 'posts' => $posts]);
    }
}