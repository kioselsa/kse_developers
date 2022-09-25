       <!-- Navbar -->
       <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
        <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="{{ route('inicio') }}">
            <strong>KSE-Developers</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}" rel="nofollow">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" rel="nofollow">Developments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >About</a>
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
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="{{ route('login') }}" rel="nofollow">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Navbar -->
