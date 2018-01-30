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
            <h3>En vivo</h3>

                <?php $id = Auth::user()->id;
                $carreras = DB::table('carreras')->where("usuario_id",$id)->get();
                ?>

                @foreach($carreras as $key => $data)


                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID Carrera</th>
                                <th scope="col">Numero Serie</th>
                                <th scope="col">Velocidad(KM/H)</th>
                                <th scope="col">Revoluciones(RPM)</th>
                                <th scope="col">Temperatura(Cº)</th>
                                <th scope="col">Presion ruedas delanteras(bar)</th>
                                <th scope="col">Presion ruedas traseras(bar)</th>
                                <th scope="col">Cosas</th>
                                <th scope="col">Cosas</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">{{$data->id_carrera}}</th>
                                <td>{{$data->n_serie}}</td>
                                <td>{{$data->velocidad}}</td>
                                <td>{{$data->revoluciones}}</td>
                            </tr>

                            </tbody>
                        </table>

                @endforeach




                <button  class="refrescar md-btn ">
                    <span class="glyphicon glyphicon-refresh"></span> Actualizar
                </button>
                    </div>
        </div>

    </div>




<script>
    $(".refrescar").on("click",function(){
        location.reload();
    });
</script>

@endsection