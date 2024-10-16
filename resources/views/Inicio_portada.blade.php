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
    <div class="header-section">
        <img src="{{ asset('/image/fondo_personal.jpg') }}" alt="Mi foto" class="profile-img">
        <h1>¡Hola! Soy Miguel</h1>
        <p>Ingeniero de software | Apasionado por la Musica | Gamer</p>
    </div>

    <!-- About Section -->
    <div class="about-section container">
        <h2>Acerca de mí</h2>
        <p>
            Actualmente estoy estudiando Ingeneria en sistemas computacionales en la universidad politecnica de
            queretaro y estos son unos de mis hobbies:
        </p>


        <ul>
            <li>Tengo una gran pasion por los juegos, mis juegos preferidos son los de modo historia aun que suelo jugar
                mas los competitivos en linea</li>
            <ul>
                <li>Los juegos que suelo jugar son los siguientes:</li>
                <li>Valorant</li>
                <li>Shadow of war</li>
                <li>God of war</li>
                <li>Total war: warhammer |||</li>
            </ul>
            <li>Tambien suelo escuchar musica y aun que escucho de casi todo porque no me gustan para nada el reggeton y
                la banda a excepcion de algunas, mi musica preferida sera la musica clasisca</li>
            <li>Me gusta mucho la tecnologia y la medicina, aun que me decidi a dedicarme por la tecnologia es un campo
                muuuuuuy amplio y no se a que dedicarme por el campo laboral que existe asi que aun estoy algo perdido
                en ese sentido</li>
        </ul>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('/image/carousel/god.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/carousel/sha.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/carousel/va.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('/image/carousel/war.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

         <a href="{{route('Vcalculadora')}}"class="btn btn-primary">calculadora!!! :D </a>
    </div>

    <!-- Contact Section -->
    <div class="contact-section ">
        <h3>Contacto</h3>
        <p>Email: <a href="mailto:miguel@example.com">122043776@upq.edu.mx</a></p>
        <p>Teléfono:4481110606</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>

</html>
