<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Sucursal</title>
</head>
<body>
    <div class="container">
        <h1 class="center-align">CREAR SUCURSAL</h1>
        <form method="POST" action="/sucursales" id="formulario">
            @csrf
            <div class="container">
                <div class="input-field">
                    <label for="nombre_sucursal">Nombre de la Sucursal</label>
                    <input type="text" name="nombre_sucursal" id="nombre_sucursal"/>
                </div>
                <div class="center-align" style="margin-top: 30px;">
                    <input type="submit" name="action" value="Enviar" class="btn waves-effect waves-light btn-large">
                </div>
            </div>
        </form>
    </div>
</body>
</html>
