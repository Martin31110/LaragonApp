<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form method="POST" action='/juguete' id='formularioJuguete'>
        @csrf


        <div class="input-field">
            <label for="nombre">Nombre del Juguete:</label>
            <input type="text" name="NombreJ" id="NombreJ">
        </div>
        <div class="input-field">
            <label for="nombre">Precio del Juguete:</label>
            <input type="text" name="PrecioJ" id="PrecioJ">
        </div>
        <div class="input-field">
            <label for="nombre">Genero del Juguete:</label>
            <input type="text" name="GeneroJ" id="GeneroJ">
        </div>
        <div class="input-field">
            <label for="nombre">Material del Juguete:</label>
            <input type="text" name="MaterialJ" id="MaterialJ">
        </div>
        <div class="input-field">
            <label for="nombre">Provedor del Juguete:</label>
            <input type="text" name="ProvedorJ" id="ProvedorJ">
        </div>
        <div class="input-field">
            <select name="categorias[]" id="categorias" multiple>
                <option value="" disabled selected>Selecciona una sucursal</option>
                @foreach ($sucursales as $sucursal)
                    <option value="{{ $sucursal->id }}">{{ $sucursal->nombre_sucursal }} </option> }}></option>
                @endforeach
            </select>
            <label for="categorias">Categorias</label>
        </div>

        <div class="center-align">
            <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Enviar</button>
        </div>
    </form>
</body>
</html>