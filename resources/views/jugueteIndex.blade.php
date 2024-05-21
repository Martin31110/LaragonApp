<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Index</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
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

    <main class="main-Index">
        @if (session()->has('success'))
            <p>¡Todo borrado exitosamente!</p>
        @endif
    
        <div class="table-container">
            <table class="toy-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Juguete</th>
                        <th>Precio del Juguete</th>
                        <th>Género del Juguete</th>
                        <th>Material del Juguete</th>
                        <th>Proveedor del Juguete</th>
                        <th>Sucursal(es)</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($juguetes as $juguete)
                        <tr>
                            <td>{{$juguete->id}}</td>
                            <td>{{$juguete->NombreJ}}</td>
                            <td>${{$juguete->PrecioJ}}</td>
                            <td>{{$juguete->GeneroJ}}</td>
                            <td>{{$juguete->MaterialJ}}</td>
                            <td>{{$juguete->ProvedorJ}}</td>
                            <td>
                                @foreach ($juguete->Sucursal as $sucursal)
                                    {{$sucursal->nombre_sucursal}} <br>
                                @endforeach
                            </td>
                            <td><a href="/juguete/{{$juguete->id}}" class="details-link">Ver detalles</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table> 
        </div>
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