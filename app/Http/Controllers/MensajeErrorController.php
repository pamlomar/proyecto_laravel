<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formulario;
use App\Http\Controllers\Controller;

class MensajeErrorController extends Controller
{
    public function mensaje(){
        return view('error');
    }
}