@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Cómo funciona</h3>
    <div class="row well-sm well">
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
        <br>
        </br>
        <h4>Si lo prefieres, puedes seguir este tutorial dónde se explica más detalladamente el proceso de instalación</h4>

        <iframe class="video " width="550" height="305"
                src="https://www.youtube.com/embed/668ivwslgxY?autoload=1">
        </iframe>
    </div>
</div>




@endsection