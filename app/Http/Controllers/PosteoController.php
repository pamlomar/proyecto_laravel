<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class PosteoController extends Controller
{

    public function ver($id){
    $post  =Post::FindOrFail($id);
        return view('post')->with('post', $post);
    }


}