@extends('layouts.frontend.master')

@section('content')
    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
        style="background-image: url(images/page-banner-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Nosotros</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Nosotros</h5>
                        <h2>Bienvenidos a E-learning </h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons
                            equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi
                            accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris. <br> <br> auci elit cons equat
                            ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi
                            accumsan ipsum velit. Nam nec tellus a odio tincidunt mauris</p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-5">
                    <div class="about-image mt-50">
                        <img src="https://img.freepik.com/vector-gratis/iconos-e-learning-planos_1284-3950.jpg?w=740&t=st=1667627850~exp=1667628450~hmac=439fe5dd062a8b5ca3de0f113565da3745c874be3240f6ddd1dbdc792df5eb86" alt="About">
                    </div> <!-- about imag -->
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Contenido de calidad</h4>
                            <p>La calidad como eje diferenciador de nuestra plataforma.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Venta de cursos online</h4>
                            <p>Acceso a una gran cantidad de cursos gratuitos y de pago de la mejor calidad.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Certificados globales</h4>
                            <p>Obtenen certificados a nivel global.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->



    <!--====== TEASTIMONIAL PART START ======-->

    @include('jambasangsang.frontend.home.testimonial')


    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    @include('jambasangsang.frontend.home.partners')

    <!--====== PATNAR LOGO PART ENDS ======-->
@endsection
