<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session()->has('success'))
        <p>Si esta todo Borrado Papi</p>
    @endif


    <h1>Juguetes</h1>
    <a href="/juguete/create">Crear Producto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Juguete</th>
                <th>Precio del Juguete</th>
                <th>Genero del Juguete</th>
                <th>Material del Juguete</th>
                <th>Provedor del Juguete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juguetes as $juguete)
                <tr>
                    <td>{{$juguete->id}}</td>
                    <td>{{$juguete->NombreJ}}</td>
                    <td>{{$juguete->PrecioJ}}</td>
                    <td>{{$juguete->GeneroJ}}</td>
                    <td>{{$juguete->MaterialJ}}</td>
                    <td>{{$juguete->Precio}}</td>
                    {{-- <td>
                        @foreach ($juguete->categorias as $categoria)
                            {{$categoria->categoria}} <br>
                        @endforeach
                    </td> --}}
                    <td><a href="/juguete/{{$juguete->id}}">IR</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>