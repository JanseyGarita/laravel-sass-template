@extends('layouts.layout')
@section('links')    
    <link rel="stylesheet" href="/styles/home/home.css">
@endsection

<!-- Body -->
@section('content')
  <!-- Hero start-->
  <div class="container-fuid hero-container">
    <div class="row">
      <div class="hero"></div>
      <div class="container header-container">
        <h1>titulo super grande</h1>
        <h3>subtitulo super grande</h3>
      </div>
    </div>
  </div>
  <!-- Hero end-->

  <!-- Cards start-->
  <div class="container-fluid cards-section">
    <div class="titles-section">
      <div class="card col-sm-12 col-md-4" style="width: 18rem;">
        <div class="card-body">
          <i class="fas fa-paper-plane"></i>
          <h5 class="card-title">título 1</h5>
          <a href="#" class="btn btn-outline-light">Ver más</a>
        </div>
      </div>
      <div class="card card col-sm-12 col-md-4" style="width: 18rem;">
        <div class="card-body">
          <i class="fas fa-paper-plane"></i>
          <h5 class="card-title">título 2</h5>
          <a href="#" class="btn btn-outline-light">Ver más</a>
        </div>
      </div>
      <div class="card card col-sm-12 col-md-4" style="width: 18rem;">
        <div class="card-body">
          <i class="fas fa-paper-plane"></i>
          <h5 class="card-title">título 3</h5>
          <a href="#" class="btn btn-outline-light">Ver más</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Cards end-->

  <!-- Link section start -->
  <div class="row link-section col-sm-12">
    <div class="card w-100 p-5">
      <p class="text align-self-center text-light">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam quasi
        quam velit qui at numquam.
      </p>
      <a
        href="#!"
        target="_blank"
        class="btn btn-outline-light text-light align-self-center"
        >ver más</a
      >
    </div>
  </div>
  <!-- Link section end -->

  <!-- Places section start -->
  <div class="container-fluid places-section">
    <div class="row">
      <div class="col-lg-6 col-md-12 main-text">
        <div class="content">
          <h2 class="text-uppercase title">Titulo</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora
            labore impedit quisquam quasi assumenda consectetur magnam dicta
            voluptas, corrupti provident perspiciatis incidunt id. Deleniti
            repellat magni minima doloribus voluptate quos?
          </p>
        </div>
      </div>
      <div class="col">
        <div class="row place-1">
          <div class="col image"></div>
          <div class="col text">
            <div class="content">
              <h4 class="text-light text-uppercase title">titulo</h4>
              <p class="text-light">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Laudantium recusandae fugit eum tempore harum ex odit ab
                repellat, quia expedita illum est nihil ad nobis.
              </p>
            </div>
          </div>
        </div>
        <div class="row place-2">
          <div class="col text">
            <div class="content">
              <h4 class="text-light text-uppercase title">titulo</h4>
              <p class="text-light">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Laudantium recusandae fugit eum tempore harum ex odit ab
                repellat, quia expedita illum est nihil ad nobis.
              </p>
            </div>
          </div>
          <div class="col image"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Places section end -->
@endsection