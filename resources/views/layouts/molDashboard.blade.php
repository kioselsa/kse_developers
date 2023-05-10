<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>kse Dashboard</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="{{ asset('img/kse.png') }}" height="35" alt="Logo KSE Developers" loading="lazy" />
            </a>

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <!-- Notification dropdown -->
                <li class="nav-item dropdown">
                <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Some news</a></li>
                    <li><a class="dropdown-item" href="#">Another news</a></li>
                    <li>
                        <a class="dropdown-item" href="#">Something else</a>
                    </li>
                </ul>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                    id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('img/user.png') }}" class="rounded-circle" height="22"
                    alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('usuarios.myprofile') }}">My profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                </li>
            </ul>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        {{-- Codigo de la pagina --}}
        <div class="row">
            <div class="col-md-3">
                <!-- Sidebar -->
                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" style="margin-top: 58px">
                    <div class="position-sticky">
                        <div class="list-group list-group-flush mx-3 mt-4">
                            <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                            <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>Main dashboard</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic </span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
                            <a href="https://analytics.google.com/analytics/web/#/p280980714/reports/intelligenthome" target="_blanck" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                            <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
                            </a>
                            <a href="{{ route('admin.contact') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-chart-bar fa-fw me-3"></i><span>Contacto</span></a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
                            <a href="{{ route('admin.usuarios') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
                            <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
                                class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
                        </div>
                    </div>
                </nav>
                <!-- Sidebar -->
            </div>
            <div class="col-md-9">
                <!--Main layout-->
                <main role="main" style="margin-top: 70px">
                    <h4>@yield('ruta')</h4>
                    <hr>
                    @include('sweetalert::alert')
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
                <!--Main layout-->
            </div>
        </div>
    </header>
    <!--Main Navigation-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
</body>

</html>
