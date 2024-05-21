<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Create.css') }}">
    <title>Create</title>
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

    <main class="main-create">
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
                    <label for="sucursales">Sucursales</label>
                    <select name="sucursales[]" id="sucursales" multiple>
                        <option value="" disabled selected>Selecciona una sucursal</option>
                        @foreach ($sucursales as $sucursal)
                            <option value="{{ $sucursal->id }}">{{ $sucursal->nombre_sucursal }} </option> }}></option>
                        @endforeach
                    </select>
                </div>

                <div class="center-align">
                    <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Enviar</button>
                </div>
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