@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3></h3>
        </div>
    </div>

    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-8 "> <!-- col-md-8 -->
                <div class="">
                        <div class="row">
                            <button  data-toggle="modal" data-target="#login-modal" class="md-btn">Añadir Coches</button>
                            <h3>Coches añadidos</h3>

                            <?php $id = Auth::user()->id;
                                  $coches = DB::table('coches')->where("user_id",$id)->get();
                            ?>

                              @foreach($coches as $key => $data)

                            <div class="table-container">
                                <table class="table table-filter">
                                    <tbody>
                                    <tr data-status="pagado">

                                        <td>
                                            <div class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://img0.gaadicdn.com/images/car-images/235x97/Audi/Audi-A4/047.jpg"  class="media-photo">
                                                </a>
                                                <div class="media-body">

                                                    <h4 class="title">
                                                        {{$data->marca}}

                                                        <br>
                                                        <button  data-stuff="{{$data->num_serie}}?ª¿!!{{$data->mensaje}}?ª¿!!{{$data->created_at}}"   data-toggle="modal" data-target="#info-modal" class="info-modal material-button material-button-toggle pull-right" type="button">
                                                            <span class="fa fa-plus" aria-hidden="true"></span>
                                                        </button>

                                                    </h4>
                                                    <p class="summary"> Modelo:{{$data->modelo}}</p>
                                                    <p class="summary"> Motorización:{{$data->motor}}</p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="loginmodal-container">
                                        <button type="button" aria-label="Close" class="btn pull-right" data-dismiss="modal" ><span aria-hidden="true">&times;</span> </button>
                                        <p id="n_serie"></p>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <script>
                                $(document).on("click", ".info-modal", function () {
                                    var arrayDatos = $(this).data('stuff');
                                    var arrayDatoseparados=arrayDatos.split("?ª¿!!");
                                    for(var i=0;i<arrayDatoseparados.length;i++){
                                        console.log(arrayDatoseparados[0]);
                                    }
                                    $("#n_serie").html("Numero de serie:"+arrayDatoseparados[0] + "<br/>Mensaje:" + arrayDatoseparados[1] + "<br/>Fecha creacion:" + arrayDatoseparados[2]);

                                });
                            </script>



                            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="loginmodal-container">
                                        <form id="formulario" action="add" method="post">
                                            {{ csrf_field() }}
                                            <button type="button" aria-label="Close" class="btn pull-right" data-dismiss="modal" ><span aria-hidden="true">&times;</span> </button>

                                            <div id="errordiv" class="alert alert-danger" hidden>
                                                <strong>Error!</strong>Rellena los campos.
                                            </div>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="numserie">
                                                        Numero de serie</label>
                                                    <div class="input-group">
                                                    <span class="">
                                                    </span>
                                                        <input type="text" class="form-control" name="numserie" id="numserie" placeholder=""  /></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subject">
                                                        Marca</label>
                                                    <select id="subject" name="subject" class="form-control" >
                                                        {{-- <option value="na" selected="">Escoja uno por favor</option>--}}
                                                        <option>AUDI</option>
                                                        <option>BMW</option>
                                                        <option>NISSAN</option>
                                                        <option>TOYOTA</option>
                                                        <option>HONDA</option>
                                                        <option>FORD</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="motor">
                                                    Motorizacion</label>
                                                <div class="input-group">
                                                <span class="">
                                                </span>
                                                    <input type="text" class="form-control" name="motor" id="motor" placeholder="" /></div>
                                            </div>

                                            <div class="form-group">
                                                <label for="modelo">
                                                    Modelo</label>
                                                <div class="input-group">
                                                    <span class="">
                                                    </span>
                                                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="" /></div>
                                            </div>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="name">
                                                        Mensaje</label>
                                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                                              placeholder="Mensaje"></textarea>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-block login loginmodal-submit">
                                                Añadir</button>
                                            <button type="button"  onclick="this.form.reset()"  class="btn btn-block login loginmodal-submit">
                                                Limpiar</button>
                                            <br>

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">

        window.onload = iniciar;
        //$(document).ready = iniciar;

        function iniciar(){
            var formulario = document.getElementById("formulario");
            formulario.addEventListener("submit", validar);

        }

        function validar(event){

            event.preventDefault();

            var numserie = $("#numserie");
            var marca = ("#subject");
            var motor = $("#motor");
            var modelo = $("#modelo");

            if(numserie.val().length < 1 || motor.val().length < 1 || modelo.val().length < 1){

                console.log("rellenar campos");
                $("#errordiv").collapse();


            }else{

                var datosForm = $(this).serialize();

                var request = $.ajax({
                    dataType : "text",
                    url:"add",
                    type:"post",
                    data:datosForm
                });

                request.done(function(response){

                    swal({
                        title: 'Buen Trabajo!',
                        text: 'Coche añadido',
                        type: 'success',
                        confirmButtonText: 'OK',
                    }).then(function(){
                        location.reload();
                    });

                });

                //

                var formulario = document.getElementById("formulario");
                for(var i=0 ; i< formulario.length; i++)
                {
                    formulario[i].value = "";
                }

            }
        }

    </script>




@endsection