@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3></h3>
        </div>
    </div>
    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-10 ">
            <h3>En vivo   <button  class="refrescar md-btn ">
                    <span class="glyphicon glyphicon-refresh"></span> Actualizar
                </button></h3>
                <div class="col-md-4">
                    <p>Numero de serie:</p>
                    <p>Id carrera:</p>
                    <p>Marca:</p>
                    <p>Modelo:</p>

                </div>
                <div class="col-md-4">
                    <p>Velocidad(KMH):</p>
                    <p>Revoluciones(RPM):</p>
                    <p>Temperatura(Cº):</p>
                    <p>Depósito(%):</p>
                </div>
                <div class="col-md-4">
                    <p>Distancia recorrida(m):</p>
                    <p>Consumo(L):</p>
                    <p>Tipo de combustible:</p>
                    <p>Torque(n-m):</p>
                </div>

            </div>

        </div>

    </div>


<script>
    $(".refrescar").on("click",function(){
        location.reload();
    });
</script>

@endsection