<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juguetes</title>
</head>
<body>
    <form method="POST" action="/juguete/{{$juguete->id}}" id='formularioJuguete'>
        @csrf
        @method('patch')


        <div class="">
            <label for="nombre">Nombre del Juguete:</label>
            <input type="text" name="NombreJ" value="{{$juguete->NombreJ}}">
        </div>
        <div class="">
            <label for="nombre">Precio del Juguete:</label>
            <input type="text" name="PrecioJ" value="{{$juguete->PrecioJ}}">
        </div>
        <div class="">
            <label for="nombre">Genero del Juguete:</label>
            <input type="text" name="GeneroJ" value="{{$juguete->GeneroJ}}">
        </div>
        <div class="">
            <label for="nombre">Material del Juguete:</label>
            <input type="text" name="MaterialJ" value="{{$juguete->MaterialJ}}">
        </div>
        <div class="">
            <label for="nombre">Provedor del Juguete:</label>
            <input type="text" name="ProvedorJ" value="{{$juguete->ProvedorJ}}">
        </div>
        
        <div class="">
            <label for="categorias">Categorias</label>
            {{-- <select name="categorias[]" id="categorias" multiple>
                @foreach ($categoria as $categoria)
                    <option value="{{ $categoria->id }}">
                    
                    </option>
                @endforeach
            </select> --}}
        </div>


        <input type="submit" class="btn center" name="action" value="Actualizar la informacion del Juguete">
    </form>
</body>
</html>