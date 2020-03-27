<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tarea 1</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/b94e20be92.js"></script>
    <!-- Bootstrap CDN-->
    <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />
    <!-- Styles -->
    @yield('links')
</head>

  <body>
    <!-- Menu start-->
      <nav
          class="navbar navbar-expand-lg navbar-dark bg-faded navbar-toggleable-sm"
        >
        <!--<a class="navbar-brand ml-5" href="#">Navbar</a>-->
        <img
          src="/images/logo.png"
          class="img-fluid logo brand-logo mt-2"
        />
        <button class="navbar-toggler navbar-toggler-right collapsed">
          <span
            class="my-1 mx-2 close"
            style="font-weight: 400; color: aliceblue; font-size: large;"
            >X</span
          >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-content">
          <ul class="navbar-nav  mt-2 mt-lg-0 ml-lg-auto mr-5">
            <li class="nav-item {{ $home }}">
              <a class="nav-link" href="inicio">inicio</a>
            </li>
            <li class="nav-item {{ $about }}">
              <a class="nav-link" href="nosotros">nosotros</a>
            </li>
            <li class="nav-item {{ $services }}">
              <a class="nav-link" href="servicios">servicios</a>
            </li>
            <li class="nav-item {{ $gallery }}">
              <a class="nav-link" href="galeria">galería</a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- Menu end-->

    <!-- Body start -->
    @yield('content')
    <!-- Body end -->

  <!-- Contact section start -->
  <div class="container-fluid contact-section">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 input-section">
        <div class="row px-5 pt-5 pb-3">
          <input
            type="text"
            class="name py-2 pl-3"
            placeholder="Nombre"
            required
          />
          <input
            type="email"
            class="email py-2 pl-3"
            placeholder="Correo"
            required
          />
        </div>
        <div class="row px-5 pb-3">
          <textarea
            cols="30"
            rows="8"
            class="message py-2 pl-3"
            placeholder="Mensaje"
          ></textarea>
        </div>
        <div class="text-center text-md-right button mb-5">
          <a
            href="#!"
            class="btn btn-outline-light text-capitalize px-4 py-2"
            style="border-radius: 3px;"
            >enviar</a
          >
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 info-section pb-4">
        <div class="number info-item">
          <i class="fas fa-phone-alt p-2 mr-3"></i>
          <p>8888 8888</p>
        </div>
        <div class="email info-item">
          <i class="fas fa-envelope p-2 mr-3"></i>
          <p>info@empresa.com</p>
        </div>
        <div class="address info-item">
          <i class="fas fa-location-arrow p-2 mr-3"></i>
          <p>
            Siquirres, Limón, Costa Rica, 500mts oeste de la Cricka de Martha
          </p>
        </div>
        <div class="facebook info-item">
          <i class="fab fa-facebook-f p-2 mr-3"></i>
          <p>/empresa</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact section end -->

  <footer class="p-4" style="background: #000d15; text-align: center;">
      <p class="text-uppercase text-light">nombre de empresa o institución. reservados todos los derechos 2020</p>
      <p class="text-uppercase" style="color: cornflowerblue;">desarrollado por: empresa</p>
  </footer>
    
  <!-- Bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="/js/scripts.js"></script>
  
</body>
</html>