<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editor de TEXTOS</title>
</head>
<body>
    <p>Nueva Actividad</p>

    @endif
    <form action="/post-act/" method="post">
        {{ csrf_field() }}
        <input type="text" name="nombre" id="nombre" placeholder="nombre">
        <input type="text" name="contenido" id="contenido" placeholder="contenido">
        <input type="date" name="fecha_inicio" id="fecha_inicio">
        <input type="date" name="fecha_final" id="fecha_final">
        <button type="submit">SAVE</button>
    </form>



</body>
</html>
