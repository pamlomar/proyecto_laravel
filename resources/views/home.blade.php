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
@foreach($posts as $post)

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <a href="post/1">
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
                    <a href="#">{{ $post->usuario }}</a>
                    on {{ $post->fecha }}
                </p>
                <a href="{{ route('editar') }}">Editar</a>
                <a href="#">Eliminar</a>
            </div>
        </div>
    </div>

@endforeach


@stop