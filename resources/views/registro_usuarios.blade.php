@extends('app')
<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Mi blog</h1>
                    <span class="subheading">Blog realizado con Bootstrap en Laravel</span>
                </div>
            </div>
        </div>
    </div>
</header>

@section('content')


    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">

                <form action='{{ route('registro_usuarios') }}' method="POST">
                    {{ csrf_field() }}
                    <fieldset>
                        <div id="legend">
                            <legend class="">Formulario de registro</legend>
                        </div>
                        <div class="form-group row">
                            <!-- Username -->
                            <label   for="username" class="col-sm-2 col-form-label">Usuario</label>
                            <div class="col-sm-10">
                                <input type="text" id="username" name="username" placeholder="" class="form-control">
                                <p>El nombre de usuario puede contener letras o números, sin espacios</p>
                            </div>

                        </div>

                        <div class="form-group row">
                            <!-- E-mail -->
                            <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="text" id="email" name="email" placeholder="" class="form-control">
                                <p>Proporcione su dirección de correo electrónico</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- Password-->
                            <label for="password1" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" id="password" name="password1" placeholder="" class="form-control">
                                <p>La contraseña debe tener al menos 5 caracteres</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!-- Password -->
                            <label for="password2" class="col-sm-2 col-form-label">Repita contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" id="password_confirm" name="password2" placeholder="" class="form-control">
                                <p>Confirmar contraseña</p>
                            </div>
                        </div>

                            <!-- Button -->
                        <button class="btn btn-primary" type="submit">Registrarse</button>

                        </div>
                    </fieldset>
                </form>

            </div>
        </div>
    </div>



@stop
