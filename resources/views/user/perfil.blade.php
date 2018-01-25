@extends('layouts.app')

@section('content')


    <div class="well">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'datos')" id="defaultOpen">Datos</button>
        <!--<button class="tablinks" onclick="openTab(event, 'coches')">Coches asociados</button>-->

    </div>

    <div id="datos" class="tabcontent">

        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                <div class="container">
                    <h2>{{ Auth::user()->name }}</h2>
                </div>
                <hr>
                <div class="container details">
                    <p><i class="fa fa-envelope"></i>  Correo Electronico:   {{Auth::user()->email }}</p>
                    <br>

                    <p><i class="glyphicon glyphicon-lock"></i>  Contraseña: ********</p>
                </div>
                <button type="button" data-toggle="modal" data-target="#login-modal" class="md-btn ">Cambiar Contraseña</button>
            </div>

        </div>
    </div>

    </div>

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
           <div class="modal-dialog">
               <div class="loginmodal-container">

                   <form id="formulario" action="dato" method="post">
                       {{ csrf_field() }}
                       <button type="button" aria-label="Close" class="btn pull-right" data-dismiss="modal" ><span aria-hidden="true">&times;</span> </button>

                       <p>Nueva Contraseña</p>
                       <input type="password" id="pass" name="pass">
                       <p>Confirmar Contraseña</p>
                       <input type="password" id="passconf" name="passconf" required>

                       <!--<p>Contraseña a validar</p>
                       <input type="text" id="form1" name="form1" value="">-->


                       <button type="submit" class="btn btn-block login loginmodal-submit">
                           Cambiar</button>
                       <button type="button" onclick="this.form.reset()" class="btn btn-block login loginmodal-submit">
                           Limpiar</button>


                       <br>
                       <div id="errordiv" class="alert alert-danger" hidden>
                           <strong>Error!</strong> Las contraseñas deben coincidir y tener como mínimo 6 carácteres.
                       </div>
                       <div id="errordiv2" class="alert alert-danger" hidden>
                           <strong>Error!</strong> Contraseña actual errónea
                       </div>

                   </form>
               </div>
           </div>
    </div>

    <script>
        window.onload = iniciar;

        function iniciar(){
            var formulario = document.getElementById("formulario");
            formulario.addEventListener("submit", validar);

        }

        function validar(event){

            event.preventDefault();

            var pass = document.getElementById("pass");
            var passconf = document.getElementById("passconf");

            if(pass.value.length < 6 || pass.value.length < 6){

                console.log("contraseña menor a 6");
                $("#errordiv").collapse();


            }else if(pass.value !== passconf.value){

                console.log("las contraseñas no coinciden");
                $("#errordiv").collapse();



            }else{

                var datosForm = $(this).serialize();

                var request = $.ajax({
                    dataType : "text",
                    url:"dato",
                    type:"post",
                    data:datosForm
                });

                request.done(function(response){

                    swal({
                        title: 'Buen Trabajo!',
                        text: 'Contraseña cambiada',
                        type: 'success',
                        confirmButtonText: 'OK',
                    });

                });

                console.log("contraseña cambiada");

                var formulario = document.getElementById("formulario");
                for(var i=0 ; i< formulario.length; i++)
                {
                    formulario[i].value = "";
                }

            }
        }


        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }


        document.getElementById("defaultOpen").click();



    </script>




   @endsection