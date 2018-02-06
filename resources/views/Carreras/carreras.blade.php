@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3></h3>
        </div>
    </div>

    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-8 ">

            <h3>Historial de Carreras</h3>


                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Datos Generales</h3>
                        <div class="pull-right">

                        </div>
                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>Id Carrera</th>
                            <th>Numero serie OBD</th>
                            <th>Fecha</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            @php
                                $id = Auth::user()->id;
                                $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                                $coches = DB::table('coches')->where("user_id",$id)->get();
                            @endphp

                        </tr>
                        </thead>
                        <tbody>

                            @foreach($carreras as $key => $data)
                            <tr>
                                <th>{{$data->id_carrera}}</th>
                                <th>{{$data->n_serie}}</th>
                                <th>{{$data->created_at}}</th>
                                @foreach($coches as $key2 => $data2)
                                    <th>{{$data2->marca }}</th>
                                    <th>{{$data2->modelo }}</th>
                                @endforeach
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registro de carreras</h3>
                        <div class="pull-right">

                        </div>
                    </div>

                    <table class="table table-hover" id="dev-table">
                        <thead>
                        <tr>
                            <th>Id Carrera</th>
                            <th>Velocidad</th>
                            <th>Revoluciones</th>
                            <th>Temperatura</th>
                            @php
                                $id = Auth::user()->id;
                                $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                                $coches = DB::table('coches')->where("user_id",$id)->get();

                                $arraycarreras = array();
                                foreach($carreras as $key3 => $data3){
                                    $carrerasreg = DB::table('carreras_registros')->where("carrera_id",$data3->id_carrera)->get();
                                    array_push($arraycarreras, $carrerasreg);
                                }


                            @endphp

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($arraycarreras as $arrayCarrera)

                            @foreach($arrayCarrera as $object)
                                <tr>
                                <th>{{ $object->carrera_id }}</th>
                                <th>{{ $object->velocidad }}</th>
                                <th>{{ $object->revoluciones }}</th>
                                <th>{{ $object->temperatura }}</th>
                                </tr>
                            @endforeach

                        @endforeach

                        </tbody>
                    </table>
                </div>



                <li><a class="md-btn" href="carrerasenvivo">Ver en vivo</a></li>
                <br>
            </div>


                {{--<form action="carrerasenvivo">
                    <button class="btn btn-info" type="submit">Ver en vivo</button>
                </form>--}}


            </div>
        </div>
    </div>


@endsection