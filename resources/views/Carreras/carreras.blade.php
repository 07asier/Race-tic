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
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Fecha </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>

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