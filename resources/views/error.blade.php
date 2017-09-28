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

    <h1>Error al registrarse. Usuario o password no correctas</h1>

    <a class="nav-link" href="{{ route('registro_usuarios') }}">Volver al formulario de registro</a>
@stop