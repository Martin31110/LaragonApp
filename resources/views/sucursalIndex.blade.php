<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucursales</title>
</head>
<body>
    <div class="container">
        <h1 class="center-align">LISTA DE SUCURSALES</h1>
        <a href="/sucursales/create">Crear Sucursal Nueva</a>
        <table class="highlight striped responsive-table centered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Sucursal</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sucursal as $suc)
                    <tr>
                        <td>{{$suc->id}}</td>
                        <td>{{$suc->nombre_sucursal}}</td>
                        <td><a href="/sucursales/{{$suc->id}}">IR</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
