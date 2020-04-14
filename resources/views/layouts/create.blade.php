<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <script src="/ckeditor/ckeditor.js"></script>
    <script src="/ckfinder/ckfinder.js"></script>
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
                <a class="nav-item nav-link" href="https://ckeditor.com/">CKEditor</a>
              </div>
            </div>
          </nav>
    </header>
    <section class="container">
        @if (count($errors) > 0)
        <p>{{ $errrors }}</p>
        @endif
        <form action="/post-act/" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="nombre">Nombre de la actividad</label>
              <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Nombre de la actividad">
              <small id="emailHelp" class="form-text text-muted">Por favor ingrese un nombre para la actividad</small>
            </div>
            <div class="form-group">
              <label for="Contenido">Contenido</label><br>
              <textarea name="contenido" id="contenido"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio</label>
              <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio">
            </div>
            <div class="form-group">
                <label for="fecha_final">Fecha de Termino</label>
                <input type="date" class="form-control" id="fecha_final" name="fecha_final">
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>
    </section>
    <script>
        CKEDITOR.replace( 'contenido', {
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
        } );
    </script>
</body>
</html>
