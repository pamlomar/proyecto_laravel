<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Support\Facades\App;


class ListarController extends Controller
{
    public function listar()
    {
        echo $locale = App::getLocale();
        $posts = Post::simplePaginate(5);
        return view('home')->with(['posts' => $posts, 'locale'=> $locale]);
    }
}