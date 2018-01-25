@extends('layouts.app')

@section('content')



<header class="masthead text-center text-white d-flex parallax">
    <div class="container my-auto">
        <div class="row">
                <h1 class="text-uppercase">
                    VISUALIZALO TODO.
                </h1>
        </div>
    </div>
</header>

<section id="services parallax">
    <div class="container fondodiv">
        <div class="row">
            <div class="col-lg-12 text-center">
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
                    <h3>Accesible</h3>
                    <p class="text-muted mb-0">Fácil acceso a los datos</p>
                </div>
            </div>
        </div>
    </div>

</section>

<section >
    <div class="container my-auto">
        <div class="row fondodiv">
            <div>
                <hr class="my-4">
                <h3 class="text-center">Quiénes somos</h3>
                <p class="">Somos una pequeña empresa del ámbito automovilistico, que analizamos a tiempo real(a través de WiFi 4G) los datos de un coche.Mediante un dispositivo llamado <a href="https://es.wikipedia.org/wiki/OBD">OBD-II </a> el cual se puede conectar al vehiculo y se encarga de almacenar los datos en la <a href="https://es.wikipedia.org/wiki/Computaci%C3%B3n_en_la_nube" >nube</a>,  luego los plasmamos en ésta aplicación web. Es un servicio rápido, fiable y sobre todo sencillo de usar. Ofrecemos la opción de añadir más de un vehiculo a la aplicación y una simple interfaz para gestionar tu perfil. </p>
                <hr class="my-4">
                <h3 class="text-center">Cómo funciona</h3>


                <div class="col-md-6">
                    <!-- BEGIN Portlet PORTLET-->
                    <div class="portlet">
                        <div class="portlet-title">
                            <div class="caption caption-red">
                                <span class="caption-subject bold font-yellow-crusta uppercase">
							 </span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_tab1" data-toggle="tab">
                                        Paso 1 </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab2" data-toggle="tab">
                                        Paso 2 </a>
                                </li>
                                <li >
                                    <a href="#portlet_tab3" data-toggle="tab">
                                        Paso 3 </a>
                                </li>
                                <li>
                                    <a href="#portlet_tab4" data-toggle="tab">
                                        Paso 4
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content ">
                                <div class="tab-pane active " id="portlet_tab1">

                                    <p>Antes de nada, deberemos adquirir nuestro dispositivo OBD-II. Una vez adquirido, abriremos la caja y encontraremos el dispositivo que tendremos que enchufar al coche.Será parecido a la siguiente imagen:</p>
                                    <img src="images/obd.png" class="imgmitad" width="29%" height="29%">
                                </div>
                                <div class="tab-pane" id="portlet_tab2">

                                    <p>Abrimos enchufamos el OBD en la ranura del coche. La ranura se encuentra debajo del volante.Si no encuentras dónde está la ranura busca aqui:<a href="https://blog.reparacion-vehiculos.es/conector-obd-coche"> ¿Dónde está mi ranura?</a> </p>
                                    <img src="images/obd2.jpg" class="imgmitad" width="32%" height="32%">
                                    <br>
                                </div>
                                <div class="tab-pane" id="portlet_tab3">

                                    <p>Abrimos la aplicación web, insertamos nuestro coche en la seccion <a href="coches">coches</a> ,(una vez loggeado) introduciendo el numero de serie del OBD correspondiente, la marca del vehículo, el modelo etc ...</p>
                                    <img src="images/vistacoches.png" class="imgmitad" width="45%" height="45%">

                                </div>
                                <div class="tab-pane" id="portlet_tab4">

                                    <p>Tutorial finalizado, ¡ ahora sólo debes usar el coche y disfrutar de todas las funciones que ofrecemos !</p>
                                    <img src="images/monigote.png" class="imgmitad" width="22%" height="22%">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="images/raceticresumen.png" class="imgmitad" width="350" height="250">
                </div>

            </div>
        </div>
    </div>
</section>



@endsection
