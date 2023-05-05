<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KSE-Developers</title>
    <meta name="description" content="KSE-Developers somos una empresa joven y fresca que utuliza altos estandares de calidad para ayudar a crecer cualquier tipo de negocios utilizando la tecnologia a su favor">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }} " />
    {{-- Token de autenticación laravel --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript">

        function callbackThen(response){

        // read HTTP status

        console.log(response.status);

        // read Promise object

        response.json().then(function(data){

        console.log(data);

        });

        }

        function callbackCatch(error){

        console.error('Error:', error)

        }

        </script>

        {!! htmlScriptTagJsApi([

        'callback_then' => 'callbackThen',

        'callback_catch' => 'callbackCatch'

        ]) !!}
</head>
<body>
    <!--Main Navigation-->
    <header>
        <style>
            /* Carousel styling */
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
            height: 100vh;
            }

            .carousel-item:nth-child(1) {
            background-image: url({{ asset('img/3.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            }
            .carousel-item:nth-child(2) {
            background-image: url({{ asset('img/020.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            }
            .carousel-item:nth-child(3) {
            background-image: url({{ asset('img/44.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            }

            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
            #introCarousel {
                margin-top: -58.59px;
            }
            #introCarousel,
            .carousel-inner,
            .carousel-item,
            .carousel-item.active {
                height: 50vh;
            }
            }

            .navbar .nav-link {
            color: #fff !important;
            }
        </style>

        @include('layouts.menu')
        @yield('carousel')
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            {{-- Incluye menus emergentes --}}
            @include('sweetalert::alert')
            @yield('contenido')
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow Me</p>
            <a
            href="https://studio.youtube.com/channel/UCBiKNIRrRCghfx1jWbEXFuA/videos/upload?filter=%5B%5D&sort=%7B%22columnType%22%3A%22date%22%2C%22sortOrder%22%3A%22DESCENDING%22%7D"
            class="btn btn-primary m-1"
            role="button"
            rel="nofollow"
            target="_blank"
            >
            <i class="fab fa-youtube"></i>
            </a>
            <a
            href="https://github.com/kioselsa"
            class="btn btn-primary m-1"
            role="button"
            rel="nofollow"
            target="_blank"
            >
            <i class="fab fa-github"></i>
            </a>
            <a
                href="https://www.linkedin.com/in/oscar-delgado-camacho-68bab2114/"
                class="btn btn-primary m-1"
                role="button"
                rel="nofollow"
                target="_blank"
            >
            <i class="fab fa-linkedin"></i>
        </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-dark" href="https://kioselsar.com/">KSE-Developers</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!--Incluir jQuery  -->
    <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>

    {{-- Sección de scripts individuales --}}
    @yield('js')
    <script>
        function onSubmit(token) {
          document.getElementById("demo-form").submit();
        }
      </script>

</body>
</html>
