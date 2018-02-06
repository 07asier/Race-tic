@extends('layouts.app')

@section('content')


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <div class="container">
        <div class="row">
            <h3></h3>
        </div>
    </div>
    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-10 ">
                <h3></h3>
                @php
                    $id = Auth::user()->id;
                    $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                    $coches = DB::table('coches')->where("user_id",$id)->get();

                    foreach($coches as $dataob){

                    $marca = $dataob->marca;
                    $modelo = $dataob->modelo;
                    }




                    $arraycarreras = array();
                    foreach($carreras as $key3 => $data3){
                        $carrerasreg = DB::table('carreras_registros')->where("carrera_id",$data3->id_carrera)->get();
                        array_push($arraycarreras, $carrerasreg);

                        $nserie = $data3->n_serie;
                    }

                @endphp

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos en vivo</h3>
                        <h3 class=" panel-title text-center">{{$marca}} {{$modelo}}</h3>
                        <div class="pull-right">
                                <span class="refrescar clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-refresh"></i>Actualizar
                     </span>
                        </div>
                    </div>
                    <table class="table table-hover" id="dev-table">
                        <thead>
                        </thead>
                        <thead>
                        <tr>
                            <th>Velocidad</th>
                            <th>Revoluciones</th>
                            <th>Temperatura </th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($arraycarreras as $arrayCarrera)

                            @foreach($arrayCarrera as $object)

                                <tr>
                                    <th>{{ $object->velocidad }}</th>
                                    <th>{{ $object->revoluciones }}</th>
                                    <th>{{ $object->temperatura }}</th>

                                </tr>

                            @endforeach
                        @endforeach



                        </tbody>

                    </table>
                </div>
            </div>

            <canvas id="myChart" width="400" height="250"></canvas>




        </div>

    </div>

    <script>
        var canvas = document.getElementById('myChart');
        canvas.height = 120;

        var data = {
            @foreach($carrerasreg as $objgraf)
            labels: ["{{$objgraf->created_at}}"],
            datasets: [
                {
                    label: "Temperatura ºC",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(75,192,192,0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "rgba(75,192,192,1)",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "rgba(75,192,192,1)",
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 5,
                    pointHitRadius: 10,
                    data: ["{{$objgraf->temperatura}}"],
             @endforeach

                }
            ]
        };



        var option = {
            showLines: true
        };
        var myLineChart = Chart.Line(canvas,{
            data:data,
            options:option
        });



        $(".refrescar").on("click",function(){

            //addData();

            location.reload();
        });

    </script>





@endsection