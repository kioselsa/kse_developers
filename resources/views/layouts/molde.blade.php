<!DOCTYPE html>
<html lang="en">
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

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand nav-link" target="_blank" href="https://kioselsar.com">
                <strong>KSE-Developers</strong>
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow"
                        target="_blank">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" rel="nofollow"
                        target="_blank">Developments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">About</a>
                    </li>
                </ul>

                <ul class="navbar-nav d-flex flex-row">
                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://studio.youtube.com/channel/UCBiKNIRrRCghfx1jWbEXFuA/videos/upload?filter=%5B%5D&sort=%7B%22columnType%22%3A%22date%22%2C%22sortOrder%22%3A%22DESCENDING%22%7D" rel="nofollow"
                    target="_blank">
                    <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://github.com/kioselsa" rel="nofollow" target="_blank">
                    <i class="fab fa-github"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://www.linkedin.com/in/oscar-delgado-camacho-68bab2114/" rel="nofollow" target="_blank">
                    <i class="fab fa-linkedin"></i>
                    </a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- Navbar -->
        @yield('carousel')
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            {{-- Incluye menus emergentes --}}
            @include('layouts.flash-message')
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
            © 2020 Copyright:
            <a class="text-dark" href="https://kioselsar.com/">KSE-Developers</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
    <!--Incluir jQuery  -->
    <script src="{{ asset('jQuery/jquery-3.6.0.min.js') }}"></script>

    <script>
        //Cierra los mensajes emergentes
        $(document).ready(function(event){
            $('.mdshide').delay(3000).fadeOut(300);
        })
    </script>

    @yield('js')

</body>
</html>
