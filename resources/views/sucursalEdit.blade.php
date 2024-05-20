<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Sucursal</title>
</head>
<body>
    <div class="container" style="margin-top:10%;">
        <h1 class="center-align">Modificar {{ $sucursal->nombre_sucursal }}</h1>
        <form method="POST" action="{{ route('sucursales.update', $sucursal->id) }}" id="formulario">
            @csrf
            @method('PATCH')
        
            <div class="container">
                <label for="nombre_sucursal">Nombre de la Sucursal</label>
                <input type="text" name="nombre_sucursal" id="nombre_sucursal" value="{{ $sucursal->nombre_sucursal }}" required>
            </div>
            <div class="center-align" style="margin-top: 30px;">
                <input type="submit" name="action" value="Actualizar" class="btn waves-effect waves-light btn-large">
            </div>
        </form>
    </div>
</body>
</html>
