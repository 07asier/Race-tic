@extends('layouts.app')

@section('content')
    <div>
    </br>
    </div>




    {{--
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Race-tic</div>

                    <div class="panel-body">
                         @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Has iniciado sesion.
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Race-tic</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Has iniciado sesion.
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Race-tic</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        Has iniciado sesion.
                    </div>
                </div>
            </div>
        </div>
    </div>

    --}}

    <div class="container">
        <div class="row">
            <h2 class="text-center">¿Qué deseas hacer?</h2>
        </div>
        <hr>
        <div class="row row-margin-bottom">
            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show"  src="images/cochesgaraje.png">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Coches
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <p>En este apartado podrás añadir todos tus coches !</p>
                                <br>
                                <form action="coches">
                                    <button class="md-btn">Acceder</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-2"></div>

            <div class="col-md-5 no-padding lib-item" data-category="view">
                <div class="lib-panel">
                    <div class="row box-shadow">
                        <div class="col-md-6">
                            <img class="lib-img-show anchura"  src="images/racecar.png">
                        </div>
                        <div class="col-md-6">
                            <div class="lib-row lib-header">
                                Carreras
                                <div class="lib-header-seperator"></div>
                            </div>
                            <div class="lib-row lib-desc">
                                <p>Accede a las carreras en vivo para poder ver todos los datos de tu coche !</p>

                                <form action="carreras">
                                    <button class="md-btn">Acceder</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


    {{--
    <div class="text-center">
        <img src="images/racetic.png" width="150" height="100">
    </div>
    --}}

@endsection
