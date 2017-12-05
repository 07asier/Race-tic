@extends('layouts.app')

@section('content')



<header class="masthead text-center text-white d-flex parallax">
    <div class="container my-auto">
        <div class="row">
            <div >
                <h1 class="text-uppercase">
                    <p class="colortitulo">OBTEN LOS DATOS DE TU COCHE.</p>
                    <p>EN UN ABRIR Y CERRAR DE OJOS.</p>
                </h1>

            </div>

            <div>
                <br> </br>
                <br> </br>
                <br> </br>
                <a class="btn btn-lg  black colordesc" aria-pressed="true" href="#services">Descubrenos</a>
            </div>
        </div>
    </div>
</header>

<section id="services parallax">
    <div class="container fondodiv">
        <div class="row">
            <div class="col-lg-12 text-center">
                <hr class="my-4">
                <h2 class="section-heading">¿Por qué nosotros?</h2>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row fondodiv">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="images/icons/fast.png"> </img>
                    <h3>Rápido</h3>
                    <p class="text-muted mb-0">Diagnóstico a tiempo real</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="images/icons/security.png"> </img>
                    <h3 >Fiable</h3>
                    <p class="text-muted mb-0">Servicio 100% fiable</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="images/icons/coche.png"> </img>
                    <h3>Multifuncional</h3>
                    <p class="text-muted mb-0">Ofrecemos la posibilidad de añadir varios coches</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <img src="images/icons/easy.png"> </img>
                    <h3>Accesibilidad</h3>
                    <p class="text-muted mb-0">Fácil acceso a los datos</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section parallax>
    <div class="container my-auto">
        <div class="row fondodiv">
            <div>
                <hr class="my-4">
                <h3 class="text-center">Quiénes somos</h3>
                <p class="">Somos una pequeña empresa del ámbito automovilistico, que analizamos a tiempo real(a través de 4G) los datos de un coche.Mediante un <a href="https://es.wikipedia.org/wiki/OBD">OBD-II </a> almacenamos los datos en la <a href="https://es.wikipedia.org/wiki/Computaci%C3%B3n_en_la_nube" >nube</a>, y luego los plasmamos en ésta aplicación web. Es un servicio rápido, fiable y sobre todo sencillo de usar. Ofrecemos la opción de añadir más de un vehiculo a la aplicación. </p>
                <hr class="my-4">

                <!--<p class="text-center">Si lo prefieres, puedes seguir este <strong>videotutorial</strong> dónde se explica perfectamente cómo usarlo</p>-->

                <!--<iframe class="video parallax" width="420" height="315"
                        src="https://www.youtube.com/embed/668ivwslgxY?autoload=1">
                </iframe>-->

            </div>
        </div>
    </div>
</section>

@endsection