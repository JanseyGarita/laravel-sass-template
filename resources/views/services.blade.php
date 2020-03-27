@extends('layouts.layout')
@section('links')
    <link rel="stylesheet" href="/styles/services/services.css">
@endsection

<!-- Body -->
@section('content')

    <!-- Hero Start-->
    <div class="container-fuid hero-container">
        <div class="row">
            <div class="hero">
            </div>
        </div>
    </div>    
    <!-- Hero Start-->

    <!-- Section name start-->
    <div class="container-fluid section-name p-4" style="background: #00141d; text-align: center">
        <h4 class="text-uppercase" style="color: cornflowerblue; font-weight: 450">
            servicios
        </h4>
    </div>
    <!-- Section name end-->

    <div class="container-fluid services-container">
        <div class="row service-one">
            <div class="col-sm-12 col-md-12 col-lg-6 service-image" id="image-1"></div>
            <div class="col-sm-12 col-md-12 col-lg-6 service-text-container">
                <h4 class="service-title text-uppercase pb-2">servicio 1</h4>
                <p class="service-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    In, aliquid. Esse dolorum quo sequi, iure error mollitia autem id, 
                    nisi velit excepturi enim? Quaerat, ducimus quasi adipisci 
                    voluptatibus debitis fuga magni eveniet cum expedita vitae 
                    impedit qui, possimus nihil rem?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    In, aliquid. Esse dolorum quo sequi, iure error mollitia autem id, 
                    nisi velit excepturi enim?<br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    In, aliquid.
                </p>
            </div>
        </div>
        <div class="row service-two">
            <div class="col-sm-12 col-md-12 col-lg-6 service-image" id="image-2"></div>
            <div class="col-sm-12 col-md-12 col-lg-6 service-text-container">
                <h4 class="service-title text-uppercase pb-2">servicio 2</h4>
                <p class="service-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    In, aliquid. Esse dolorum quo sequi, iure error mollitia autem id, 
                    nisi velit excepturi enim?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    In, aliquid. Esse dolorum quo sequi, iure error mollitia autem id, 
                    nisi velit excepturi enim?
                </p>
            </div>
        </div>
    </div>
@endsection