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
    <div class="container-fluid">
        <h2>Crear nuevo post</h2>
    <form method="POST" action="{{ route('new_post') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" name="titulo">
        </div>
        <div class="form-group">
            <label for="subtitulo">Subtitulo</label>
            <input type="text" class="form-control" name="subtitulo">
        </div>
        <div class="form-group">
            <label for="descripcion">Contenido del post</label>
            <textarea class="form-control" rows="3" name="descripcion"></textarea>
        </div>
        <div class="form-group">
            <label for="usuario_id">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuario_id">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de publicación</label>
            <input type="text" class="form-control" name="fecha">
        </div>
        <div class="form-group">
            <label for="fotoPost">Adjuntar foto</label>
            <input type="file" name="fotoPost">
        </div>

        <button type="submit" class="btn btn-default">Guardar post</button>
    </form>
    </div>


@stop