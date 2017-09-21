<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Controllers\Controller;

class EditarPostController extends Controller
{

    public function editar(Request $request, $id)
    {
        if ($request->isMethod('post'))
        {
        $post = Post::find($id);

        $titulo = $request->input('titulo');
        $subtitulo = $request->input('subtitulo');
        $descripcion = $request->input('descripcion');
        $usuario = $request->input('usuario');
        $fecha = $request->input('fecha');
        $fotoPost = $request->input('fotoPost');

        $post -> save();

        return redirect()->route('home', ['post' => $id]);
        }else
        {

            return view('editar');
        }
    }


}