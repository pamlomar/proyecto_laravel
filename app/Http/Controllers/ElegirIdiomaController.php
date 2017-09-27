<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use Illuminate\Support\Facades\App;

class ElegirIdiomaController extends Controller
{
    public function  elegir($locale)
    {
        App::setLocale($locale);

        return redirect()->route('home', ['locale' => $locale]);
    }
}