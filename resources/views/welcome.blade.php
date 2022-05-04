@extends('layouts.molde')

@section('carousel')
    @include('layouts.carousel')
@endsection

@section('contenido')
      <!--Section: Content-->
      <section>
        <div class="row">
            <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/Photos/Others/images/51.jpg" class="img-fluid" />
                <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
            </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Somos facilitadores</strong></h4>
            <p class="text-muted">
                En KSE-Developers, somos gente profesional que te ayudamos a hacer que tu negocio crezca, nos preocupamos por ser gente
                profesional que siempre estaremos al tanto las necesidades de tu negocio.
            </p>
            <p><strong>Aplicamos los mas altos estandares de calidad</strong></p>
            <p class="text-muted">
                Como empresa dedicada al desarrollo de aplicaciones nos caracterizamos por siempre estar a la vanguardia en los avances tecnológicos
                además de que siempre buscamos que nuestros productos sean de calidad y se adapten a tus necesidades, además de que promovemos el trabajo AGIL
                lo que permite que entreguemos avances en menor tiempo.
            </p>
            </div>
        </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="text-center">
    <h4 class="mb-5"><strong>Expertos en</strong></h4>

    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                src="{{ asset('img/tipos-de-páginas-web.jpg') }}"
                class="img-fluid"
            />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
            <div class="card-body">
            <h5 class="card-title">Desarrollo de paginas web</h5>
            <p class="card-text">
                Somos expertos en desarrollo de paginas web y configuración de su entorno
            </p>
            <a href="#!" class="btn btn-primary">Conoce mas</a>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                src="{{ asset('img/app_moviles.png') }}"
                class="img-fluid"
            />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
            <div class="card-body">
            <h5 class="card-title">Aplicaciones moviles</h5>
            <p class="card-text">
                Somos expertos en el desarrollo de aplicaciones moviles IOS y Android
            </p>
            <a href="#!" class="btn btn-primary">Conoce mas</a>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img
                src="{{ asset('img/marketing_digital.webp') }}"
                class="img-fluid"
            />
            <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
            </div>
            <div class="card-body">
            <h5 class="card-title">Expertos en Marketing Digital</h5>
            <p class="card-text">
                Podemos ayudarte para emprender una campaña de Marketing Digital enfocada en tu negocio.
            </p>
            <a href="#!" class="btn btn-primary">Conoce mas</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--Section: Content-->

    <hr class="my-5" />

    <!--Section: Content-->
    <section class="mb-5">
        <h4 class="mb-5 text-center"><strong>Contactanos</strong></h4>

        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('contact.store') }}" method="get">
                    <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                            <input type="text" id="name" name="name" class="form-control" required />
                            <label class="form-label" for="name">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="lastName" name="lastName" class="form-control" required />
                                <label class="form-label" for="lastName">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" name="email" class="form-control" required />
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <!-- Telephon number -->
                    <div class="form-outline mb-4">
                        <input type="tel" id="phone" name="phone" class="form-control" />
                        <label class="form-label" for="phone">Phone number</label>
                    </div>

                   <!--Material textarea-->
                    <div class="form-outline mb-4">
                        <textarea id="coment" name="coment" class="md-textarea form-control" rows="3"></textarea>
                        <label for="coment" class="form-label">Comentarios</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">
                    Enviar
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!--Section: Content-->
@endsection
