<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class ListarController extends Controller
{
    public function listar()
    {
        $posts = Post::simplePaginate(5);
        return view('home')->with('posts', $posts);
    }
}