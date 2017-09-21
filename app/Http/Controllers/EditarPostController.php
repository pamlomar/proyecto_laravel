<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Controllers\Controller;

class EditarPostController extends Controller
{

    public function editar(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            
            $post = Post::find($id);

            $titulo = $request->input('titulo');
            $subtitulo = $request->input('subtitulo');
            $descripcion = $request->input('descripcion');
            $usuario = $request->input('usuario');
            $fecha = $request->input('fecha');

            $post->titulo=$titulo;
            $post->subtitulo=$subtitulo;
            $post->descripcion=$descripcion;
            $post->usuario=$usuario;
            $post->fecha=$fecha;

            $post->save();

            return redirect()->route('home');
        } else {

            $post = Post::find($id);

            return view('editar', ['post' => $post] );
        }
    }


}