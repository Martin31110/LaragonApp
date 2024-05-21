<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Edit.css') }}">
    <title>Juguetes</title>
</head>
<body>
    <nav class="navbar">
        <div class="radio-inputs">
          <h1>Juguetería</h1>
          <label class="radio">
            <input type="radio" name="radio" value="juguete" checked />
            <span class="name">Home Page</span>
          </label>
          <label class="radio">
            <input type="radio" name="radio" value="juguete/create" />
            <span class="name">Crear Producto</span>
          </label>
        </div>
    </nav>


    <main class="main-edit">
        <form method="POST" action="/juguete/{{$juguete->id}}" id='formularioJuguete'>
            @csrf
            @method('patch')
    
            <div class="input-field">
                <label for="nombre">Nombre del Juguete:</label>
                <input type="text" name="NombreJ" value="{{$juguete->NombreJ}}">
            </div>
            <div class="input-field">
                <label for="nombre">Precio del Juguete:</label>
                <input type="text" name="PrecioJ" value="{{$juguete->PrecioJ}}">
            </div>
            <div class="input-field">
                <label for="nombre">Género del Juguete:</label>
                <input type="text" name="GeneroJ" value="{{$juguete->GeneroJ}}">
            </div>
            <div class="input-field">
                <label for="nombre">Material del Juguete:</label>
                <input type="text" name="MaterialJ" value="{{$juguete->MaterialJ}}">
            </div>
            <div class="input-field">
                <label for="nombre">Proveedor del Juguete:</label>
                <input type="text" name="ProvedorJ" value="{{$juguete->ProvedorJ}}">
            </div>
            <div class="input-field">
                <label for="categorias">Sucursales</label>
                <select name="sucursales[]" id="sucursales" multiple>
                    @foreach ($sucursales as $sucursal)
                        <option value="{{ $sucursal->id }}"
                            @if($juguete->Sucursal->contains($sucursal->id)) selected @endif>
                            {{$sucursal->nombre_sucursal}}
                        </option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn center" name="action" value="Actualizar la información del Juguete">
        </form>
    </main>


    <script>
        // Obtener todos los radio buttons
        const radioButtons = document.querySelectorAll('input[type="radio"]');
      
        // Obtener la ruta actual
        const currentPath = window.location.pathname;
    
        // Variable para verificar si se encontró la página actual
        let foundCurrentPage = false;
    
        // Buscar el radio button que corresponde a la ruta actual y marcarlo como seleccionado
        radioButtons.forEach(radioButton => {
            if (radioButton.value === currentPath.substr(1)) {
                radioButton.checked = true;
                foundCurrentPage = true;
            }
        });
    
        // Si no se encontró la página actual, deseleccionar todos los radio buttons
        if (!foundCurrentPage) {
            radioButtons.forEach(radioButton => {
                radioButton.checked = false;
            });
        }
    
        // Agregar un event listener a cada radio button
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('change', function() {
                // Obtener el valor del radio button seleccionado
                const selectedValue = this.value;
    
                // Redirigir a la página correspondiente
                window.location.href = `/${selectedValue}`;
            });
        });
    </script>
</body>
</html>