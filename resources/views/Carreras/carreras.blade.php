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
                            <th>Numero serie</th>
                            <th>Fecha</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php
                            $id = Auth::user()->id;
                            $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                            $coches = DB::table('coches')->where("user_id",$id)->get();
                            @endphp

                            @foreach($carreras as $key => $data)
                                <th>{{$data->id_carrera}}</th>
                                <th>{{$data->n_serie}}</th>
                                <th>{{$data->created_at}}</th>
                            @endforeach
                            @foreach($coches as $key2 => $data2)
                                <th>{{$data2->marca}}</th>
                                <th>{{$data2->modelo}}</th>
                            @endforeach

                            <th>
                            <button  data-toggle="modal" data-target="#info-modal" class="info-modal material-button material-button-toggle pull-right" type="button">
                                <span class="fa fa-plus" aria-hidden="true"></span>
                            </button></th>

                        </tr>
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