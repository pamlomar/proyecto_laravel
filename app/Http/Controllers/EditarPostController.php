<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Controllers\Controller;

class EditarPostController extends Controller
{

    public function editar(){
        return view('editar');
    }


}