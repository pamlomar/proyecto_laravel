<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Formulario;
use App\Http\Controllers\Controller;

class NuevoUsuarioController extends Controller
{

    public function registrar(Request $request){

        if ($request->isMethod('post'))
        {
            //Recuperar las variables cuando entramos por el método post:
            $username = $request->input('username');
            $email = $request->input('email');
            $password1 = $request->input('password1');
            $password2 = $request->input('password2');

                if ($username == ""){
                    return redirect()->route('registro_usuarios', ['username'=> $username, 'email'=> $email, 'password1'=> $password1, 'password2'=> $password2] );
                }

                if($email == ""){
                    return redirect()->route('registro_usuarios', ['username'=> $username, 'email'=> $email, 'password1'=> $password1, 'password2'=> $password2] );
                }

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return redirect()->route('registro_usuarios', ['username'=> $username, 'email'=> $email, 'password1'=> $password1, 'password2'=> $password2] );
                }
                if ($password1!=$password2){
                    return redirect()->route('registro_usuarios', ['username'=> $username, 'email'=> $email, 'password1'=> $password1, 'password2'=> $password2] );
                }

                $longitud=strlen(password1);

                if ($longitud<5){
                    return redirect()->route('registro_usuarios', ['username'=> $username, 'email'=> $email, 'password1'=> $password1, 'password2'=> $password2] );
                }

                //Asignar las variables a un objeto para después guardar esos datos en la bd desde el formulario:
                $usuario=new Formulario;
                $usuario->username=$username;
                $usuario->email=$email;
                $usuario->password1=$password1;
                $usuario->password2=$password2;

                $usuario->save();

                return redirect()->route('bienvenida');

        }else
        {
            //Si entramos por el método get, retornamos la vista:
            return view('registro_usuarios');
        }
    }

}