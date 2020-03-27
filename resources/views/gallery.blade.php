@extends('layouts.layout')
@section('links')
<link rel="stylesheet" href="/styles/gallery/gallery.css">
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
        galería
    </h4>
</div>
<!-- Section name end-->

<!-- Images section start-->
<div class="container images-section">
    @php
        for ($i = 1; $i < 16; $i++){ 
            echo '<div class="img" id="img-'.$i.'"></div>';
        }
    @endphp
</div>
<!-- Images section end-->

@endsection