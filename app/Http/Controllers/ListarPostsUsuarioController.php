<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class ListarPostsUsuarioController extends Controller
{
    public function listar($id)
    {
        $usuarios = Usuario::find($id);

        return view('postUsuario')->with('usuarios', $usuarios);

    }
}