<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portada Personal</title>
    @vite(['resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/portada.css') }}">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
</head>

<body>

    <!-- Header Section -->
    <div class="header-section text-center">
        <img src="{{ asset('/image/fondo_personal.jpg') }}" alt="Mi foto" class="profile-img img-fluid">
        <h1>¡Hola! Soy una Calculadora!!!</h1>
        <p>Calculadora de conversiones de unidades de almacenamiento.</p>
    </div>

    <!-- About form -->
    <div class="container mt-5">
        <h2>Calculadora de Conversión</h2>
        <form action="{{ route('convertir') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="valor" class="form-label">Ingrese el valor:</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="unidad" class="form-label">Seleccione la unidad inicial:</label>
                <select class="form-select" id="unidad" name="unidad" required>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="unidad_destino" class="form-label">Seleccione la unidad de destino:</label>
                <select class="form-select" id="unidad_destino" name="unidad_destino" required>
                    <option value="MB">MB</option>
                    <option value="GB">GB</option>
                    <option value="TB">TB</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Convertir</button>
           
        </form>

        <a href="{{route('inicio')}}"class="btn btn-primary">Inicio</a>
    </div>

    <!-- Contact Section -->
    <div class="contact-section mt-5">
        <h3>Contacto</h3>
        <p>Email: <a href="mailto:miguel@example.com">122043776@upq.edu.mx</a></p>
        <p>Teléfono: 4481110606</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
