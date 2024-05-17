<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juguetes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <h1>{{$juguete->NombreJ}}</h1>
    <h1>{{$juguete->PrecioJ}}</h1>

    <a href="/juguete/{{$juguete->id}}/edit">Modificar informacion del Juguete</a>

    <form method="POST" action="/juguete/{{$juguete->id}}" id="formularioJuguete">
        @csrf
        @method('DELETE')
        <input type="submit" name="action" value="Eliminar">
    </form>
</body>
</html>