<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Controllers\Controller;

class EliminarPostController extends Controller
{

    public function eliminar($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect()->route('home');
    }
}