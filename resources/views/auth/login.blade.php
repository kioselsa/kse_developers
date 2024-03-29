<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="KSE-Developers somos una empresa joven y fresca que utuliza altos estandares de calidad para ayudar a crecer cualquier tipo de negocios utilizando la tecnologia a su favor">
    <title>Login kse_developer</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>     
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: 0px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>  

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <!--Main Navigation-->
      @include('layouts.menu')
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">         
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8"> 
              <form method="POST" action="{{ route('login') }}" class="bg-white rounded shadow-5-strong p-5">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="email" class="form-control" name="email" required autofocus value="{{ old('email') }}"/>
                  <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control" name="password" required autocomplete="current-password"/>
                  <label class="form-label" for="password">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="remember" checked name="remember"/>
                      <label class="form-check-label" for="remember">
                        Remember me
                      </label>
                    </div>
                  </div>

                  <div class="col text-center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header> 

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

