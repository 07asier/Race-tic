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


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID Carrera</th>
                        <th>Num serie coche</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>7815688</td>
                        <td>Asier</td>
                        <td>25/10/2017</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>849965</td>
                        <td>Aitor</td>
                        <td>10/1/2018</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>100489</td>
                        <td>Mikel</td>
                        <td>2/1/2018</td>
                    </tr>
                    </tbody>
                </table>


                {{--<form action="carrerasenvivo">
                    <button class="btn btn-info" type="submit">Ver en vivo</button>
                </form>--}}
                <li><a class="md-btn" href="carrerasenvivo">Ver en vivo</a></li>

            </div>
        </div>
    </div>


@endsection