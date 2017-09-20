<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class ContactoController extends Controller
{
    public function contacto()
    {

        return view('contacto');
    }
}