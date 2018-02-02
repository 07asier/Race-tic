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
                <h3>En vivo</h3>


                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos Generales</h3>
                        <div class="pull-right">
                                <span class="refrescar clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                        <i class="glyphicon glyphicon-refresh"></i>Actualizar
                     </span>
                        </div>
                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>Id Carrera</th>
                            <th>Numero serie</th>
                            <th>Velocidad</th>
                            <th>Revoluciones</th>
                            <th>Temperatura </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <?php
                            $id = Auth::user()->id;
                            $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                            ?>

                            @foreach($carreras as $key => $data)

                                    <th>{{$data->id_carrera}}</th>
                                    <th>{{$data->n_serie}}</th>
                                    <th>{{$data->velocidad}}</th>
                                    <th>{{$data->revoluciones}}</th>
                                    <th>{{$data->temperatura}}</th>

                        </tr>
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
            labels: ["{{$data->created_at}}"],
            datasets: [
                {
                    label: "Velocidad",
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
                    data: ["{{$data->temperatura}}"],
                    @endforeach

                }
            ]
        };

        function addData(){
            var datasetLength = myLineChart.data.datasets[0].data.length;
            for(var i=0;i<datasetLength;i++) {
                <?php $id = Auth::user()->id;
                    $carreras2 = DB::table('carreras')->where("usuario_id",$id)->get();?>
                @foreach($carreras2 as $key1 => $data2)
                    myLineChart.data.datasets[0].data[i+1] = "{{$data2->velocidad}}";
                    myLineChart.data.labels[i+1] = "{{$data2->created_at}}";
                    myLineChart.update();
                @endforeach
            }


        }

        var option = {
            showLines: true
        };
        var myLineChart = Chart.Line(canvas,{
            data:data,
            options:option
        });

        var canvas = document.getElementById('myChart');
        var myLineChart = Chart.Line(canvas,{
            data:{

                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "Dataset Temperatura",
                        data: [65, 59, 80, 81, 56, 55, 40],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],


                        borderWidth: 1
                    }
                ]
            },
            options:{
                scales: {
                    yAxes:[{
                        stacked:true,
                        gridLines: {
                            display:true,
                            color:"rgba(255,99,132,0.2)"
                        }
                    }],
                    xAxes:[{
                        gridLines: {
                            display:false
                        }
                    }]
                }
            }
        });

        $(".refrescar").on("click",function(){

            addData();
            //location.reload();
        });

    </script>





@endsection