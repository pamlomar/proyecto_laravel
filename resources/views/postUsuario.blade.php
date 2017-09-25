@extends('app')
<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Mi blog</h1>
                    <span class="subheading">Listado de posts del usuario ...</span>
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

                @foreach($usuarios->posts as $post)

                    <div class="post-preview">
                        <a href="post/{id}">
                            <!-- Las rutas se ponen con route.  -->
                            <h2 class="post-title">
                                {{ $post->titulo }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitulo }}
                            </h3>
                        </a>
                    </div>
                    <p class="post-meta">Posted by
                        <a href="">{{ $post->usuario_id }}</a>
                        on {{ $post->fecha }}
                    </p>
                    <a href="editar/{{ $post->id }}">Editar</a>
                    <a href="eliminar/{{ $post->id }}">Eliminar</a>

                @endforeach

            </div>
        </div>
    </div>
@stop