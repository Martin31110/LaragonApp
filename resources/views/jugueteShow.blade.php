<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juguetes</title>
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
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

    <main class="main-show">
        <table>
            <tr>
                <th>Nombre del Juguete</th>
                <td>{{$juguete->NombreJ}}</td>
            </tr>
            <tr>
                <th>Precio del Juguete</th>
                <td>{{$juguete->PrecioJ}}</td>
            </tr>
            <tr>
                <th>Género del Juguete</th>
                <td>{{$juguete->GeneroJ}}</td>
            </tr>
            <tr>
                <th>Material del Juguete</th>
                <td>{{$juguete->MaterialJ}}</td>
            </tr>
            <tr>
                <th>Proveedor del Juguete</th>
                <td>{{$juguete->ProvedorJ}}</td>
            </tr>
        </table>
    
        <a href="/juguete/{{$juguete->id}}/edit">Modificar información del Juguete</a>
    
        <form method="POST" action="/juguete/{{$juguete->id}}" id="formularioJuguete">
            @csrf
            @method('DELETE')
            <input type="submit" name="action" value="Eliminar">
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