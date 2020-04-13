<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor Texto</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Editor de texto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-auto" id="navbarNavAltMarkup">
              <div class="navbar-nav mx-auto">
                <a class="nav-item nav-link active" href="/crear/">Crear <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://ckeditor.com/" target="_BLANK">CKEditor</a>
              </div>
            </div>
          </nav>
    </header>
    <section class="container">
        @if (count($actividad)>0)
            @foreach ($actividad as $act)
            <div class="row">
                <div class="col-xl-6">
                    <center><h4>Nombre de la actividad: </h4></center>
                </div>
                <div class="col-xl-6">
                    <h4>{{ $act->activity_name }}</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="container-fluid border rounded border-secondary bg-white">
                    {!! $act->contenido !!}
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-6">
                    <h4>Fecha de Inicio: <b>{{ $act->fecha_inicio }}</b></h4>
                </div>
                <div class="col-xl-6">
                    <h4>Fecha de Termino: <b>{{ $act->fecha_termino }}</b></h4>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xl-6">
                    <form action="/editar/{{$act->id}}" method="GET">
                        {{ csrf_field() }}
                        <button class="btn btn-success form-control" type="submit">Editar</button>
                    </form>
                </div>
                <div class="col-xl-6">
                    <form action="/borrar/{{$act->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class=" btn btn-danger form-control">Borrar</button>
                    </form>
                </div>
            </div>
            <hr>
            <br>
            @endforeach
        @endif
    </section>
</body>
</html>
