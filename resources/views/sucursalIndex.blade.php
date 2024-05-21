<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sucursal.css') }}">
    <title>Sucursales</title>
</head>
<body>

    <nav class="navbar">
        <div class="radio-inputs">
          <h1>Juguetería</h1>
          <label class="radio">
            <input type="radio" name="radio" value="sucursales" checked />
            <span class="name">Page</span>
          </label>
          <label class="radio">
            <input type="radio" name="radio" value="sucursales/create" />
            <span class="name">Crear Sucursales</span>
          </label>
        </div>
    </nav>


    <main class="main-sucursales">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Sucursal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sucursal as $suc)
                        <tr>
                            <td>{{$suc->id}}</td>
                            <td>{{$suc->nombre_sucursal}}</td>
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
