<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formulario;
use App\Http\Controllers\Controller;

class MensajeBienvenidaController extends Controller
{
    public function ver(){
        return view('bienvenida');
    }
}