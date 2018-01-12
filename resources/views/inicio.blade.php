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
                <p class="">Somos una pequeña empresa del ámbito automovilistico, que analizamos a tiempo real(a través de WiFi 4G) los datos de un coche.Mediante un dispositivo llamado <a href="https://es.wikipedia.org/wiki/OBD">OBD-II </a> el cual se puede conectar al vehiculo y se encarga de almacenar los datos en la <a href="https://es.wikipedia.org/wiki/Computaci%C3%B3n_en_la_nube" >nube</a>, y luego los plasmamos en ésta aplicación web. Es un servicio rápido, fiable y sobre todo sencillo de usar. Ofrecemos la opción de añadir más de un vehiculo a la aplicación y simple interfaz para gestionar tu perfil facil de usar. </p>
                <hr class="my-4">
                <h3 class="text-center">Como funciona</h3>

                <h4><strong>· Paso 1</strong></h4>
                <p>Una vez abierta la caja, encontraremos el dispositivo que tendremos que enchufar al coche</p>
                <img src="images/obd.png" class="imgmitad" width="250" height="150">
                <h4><strong>· Paso 2</strong></h4>
                <p>Abrimos enchufamos el OBD en la ranura del coche. La ranura se encuentra debajo del volante.Si no encuentras dónde está la ranura busca aqui:<a href="https://blog.reparacion-vehiculos.es/conector-obd-coche"> ¿Dónde está mi ranura?</a> </p>
                <img src="images/obd2.jpg" class="imgmitad" width="250" height="200">
                <h4><strong>· Paso 3</strong></h4>
                <p>Abrimos la aplicación web, insertamos nuestro coche en la seccion <a href="coches">coches</a> , introduciendo el numero de serie del OBD correspondiente, la marca del vehículo, el modelo etc ...</p>
                <h4><strong>· Paso 4</strong></h4>
                <p>Tutorial finalizado, ¡ ahora sólo debes usar el coche y disfrutar de todas las funciones que ofrecemos !</p>
                <img src="images/monigote.png" class="imgmitad" width="250" height="250">
                <hr class="my-4">
                <h3 class="text-center">Nuestra ubicación</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d725.5916790477431!2d-1.971255763124091!3d43.32751476990409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1szubiri+manteo!5e0!3m2!1sen!2ses!4v1515747220322" id="maps" width="350" height="250" frameborder="0" style="border:0" allowfullscreen ></iframe>
                
                <!--<p class="text-center">Si lo prefieres, puedes seguir este <strong>videotutorial</strong> dónde se explica perfectamente cómo usarlo</p>-->

                <!--<iframe class="video parallax" width="420" height="315"
                        src="https://www.youtube.com/embed/668ivwslgxY?autoload=1">
                </iframe>-->

            </div>
        </div>
    </div>
</section>

@endsection
