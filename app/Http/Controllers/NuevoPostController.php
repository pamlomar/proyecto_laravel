<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Controllers\Controller;

class NuevoPostController extends Controller
{

    public function crear(Request $request){

        if ($request->isMethod('post'))
        {
        //Recuperar las variables cuando entramos por el método post:
        $titulo = $request->input('titulo');
        $subtitulo = $request->input('subtitulo');
        $descripcion = $request->input('descripcion');
        $usuario = $request->input('usuario');
        $fecha = $request->input('fecha');
        $fotoPost = $request->input('fotoPost');

        //Asignar las variables a un objeto para después guardar esos datos en la bd desde el formulario:
        $post=new Post;
        $post->titulo=$titulo;
        $post->subtitulo=$subtitulo;
        $post->descripcion=$descripcion;
        $post->usuario=$usuario;
        $post->fecha=$fecha;
        $post->fotoPost=$fotoPost;

        $post->save();

            return redirect()->route('home');

       }else
        {
        //Si entramos por el método get, retornamos la vista:
        return view('new_post');
        }
    }

}