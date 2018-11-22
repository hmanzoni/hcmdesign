
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('titulo') </title>
    <meta name="description" content="Web desing services, making your website looks and positioned itself as the best, increase significantly the sales in your business.">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Hugo Carrizo Manzoni">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/sweetalert2.min.css">
    <link rel="stylesheet" href="/css/app.css">


</head>

<body>
<!--MENU NAV-->
    <header class="site_header">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top navcolor">
            <a class="logologo" href="/">
                <img class="logoheader" src="img/logoblanco.png" alt="logohome">
                <p class="logotext">HCM</p>
            </a>

            <button class="navbar-toggler movil" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navflex" id="navbarCollapse">
                <ul id="menu">
                @forelse($secciones as $seccion)
                    <li class="navb" ><a class="botonnav" href="{{ request()->is('/') ? '' : '/' }}#{{ $seccion['titulo'] }}"><span> {{ $seccion['titulo'] }} </span></a></li>
                @empty
                @endforelse
                  </ul>
                </div>
            </div>
        </nav>
    </header>

@yield('content')

    <!--FOOTER-->
    <footer class="mt-5">
            <div class="container-fluid bg-faded footercontact mt-5">
              <div class="container">
                <div class="row py-3">
                  <!-- footer column 1 start -->
                  <div class="col">
                    <!-- row start -->
                    <div class="row py-2 centrado">
                      <div class="col hidden-md-down">
                        <a class="bg-circle bg-danger" href="https://www.linkedin.com/in/hugo-carrizo-manzoni-3a032116a/" target="_blank" >
                          <i class="fab fa-linkedin-in fa-2x" aria-hidden="true "></i>
                        </a>
                      </div>
                      <div class="col iconosredondos">
                        <h4>Hugo Carrizo Manzoni</h4>
                        <p>LinkedIn</p>
                      </div>
                    </div>
                    <!-- row end -->
                  </div>
                  <!-- footer column 1 end -->
                  <!-- footer column 2 start -->
                  <div class="col">
                    <!-- row start -->
                    <div class="row py-2 centrado">
                      <div class="col hidden-md-down">
                        <a class="bg-circle bg-info" href="mailto:hugocmdesign@gmail.com">
                          <i class="far fa-envelope fa-2x" aria-hidden="true "></i>
                        </a>
                      </div>
                      <div class="col iconosredondos">
                        <h4>Email</h4>
                        <p class="celu">Write me</p>
                      </div>
                    </div>
                    <!-- row end -->
                  </div>
                  <!-- footer column 2 end -->
                  <!-- footer column 3 start -->
                  <div class="col">
                    <!-- row start -->
                    <div class="row py-2 centrado">
                        <div class="col hidden-md-down">
                          <a class="bg-circle bg-warning" href="tel:+393479398787">
                            <i class="fas fa-mobile-alt fa-2x" aria-hidden="true "></i>
                          </a>
                        </div>
                        <div class="col iconosredondos">
                          <h4>Cellphone</h4>
                          <p class="celu">(+39) 347 939 8787</p>
                        </div>
                      </div>
                      <!-- row end -->
                  </div>
                  <!-- footer column 3 end -->
                  <!-- footer column 3 start -->
                  <div class="col">
                    <!-- row start -->
                    <div class="row py-2 centrado">
                        <div class="col hidden-md-down">
                          <a class="bg-circle bg-success" target="_blank" href="https://www.google.it/maps/place/Via+del+Brennero,+68,+38122+Trento+TN/@46.0765356,11.1236708,18.06z/data=!4m13!1m7!3m6!1s0x478276cac9ce9ddb:0x27c6a299139ff547!2sTrento!3b1!8m2!3d46.0747793!4d11.1217486!3m4!1s0x47827132493f9b4f:0x325cba7df0b420fa!8m2!3d46.0775325!4d11.1235808">
                            <i class="fas fa-search-location fa-2x" aria-hidden="true "></i>
                          </a>
                        </div>
                        <div class="col iconosredondos">
                          <h4>Address</h4>
                          <p class="celu">Italy, Trento, <small> Via Brennero 68</small></p>
                        </div>
                      </div>
                      <!-- row end -->
                  </div>
                  <!-- footer column 3 end -->
                </div>
              </div>
              <div class="col">
                <p class="text-white text-center coprig">&copy;
                    <?php
                      $copyYear = 2018; // Set your website start date
                      $curYear = date('Y'); // Keeps the second year updated
                      echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '') ;
                    ?>
                      Copyright
                      | By Hugo Carrizo Manzoni
                      | All Rights Reserved.</p>
              </div>
            </div>
        </footer>
        <div id="app"></div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/js/sweetalert2.all.min.js"></script>
    <script src="/js/app.js"></script>
    @include('sweet::alert')


    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "Person",
      "name": "Hugo Carrizo Manzoni",
      "jobTitle": "Web Developer",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Trento",
        "addressRegion": "Trentino-Alto Adige"
      }
    }
    </script>

</body>
</html>