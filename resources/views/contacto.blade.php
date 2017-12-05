@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
        <h3>Contáctanos</h3>
       </div>
   </div>

    <div class="container">
        <div class="row">
            <div class=" "> <!-- col-md-8 -->
                <div class="well well-sm">
                    <form id="formulario" action="contact" method="post">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>
                                        Nombre</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Introduzca su nombre"  /></div>
                                </div>
                                <div class="form-group">
                                    <label >
                                        Correo Electrónico</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com"  /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Asunto</label>
                                    <select id="subject" name="subject" class="form-control" >
                                        <option value="na" selected="">Escoja uno por favor:</option>
                                        <option value="service">Atención al cliente</option>
                                        <option value="suggestions">Sugerencias</option>
                                        <option value="product">Quejas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25"
                                              placeholder="Mensaje"></textarea>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContact" name="button">
                                    Enviar</button> {{-- data-toggle="modal" data-target=".bs-example-modal-lg" --}}
                            </div>

                                <div id="modala" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <H2 class="text-center">Mensaje enviado!</H2>
                                                <h4 class="text-center">Te responderemos al correo</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>

    window.onload = iniciar;


    function iniciar() {
        var formulario = document.getElementById("formulario");
        formulario.addEventListener("submit", validar);

    }


    /*function popup(){
        var nombre = document.getElementById("name");
        if (nombre.value.length > 0 ) {
            $("#modala").collapse();
        }
    }*/

    function validar(event){
        var formulario = document.getElementById("formulario");
        var camposcorrectos = true;
        for (var i=0;i<formulario.elements.length;i++){
            var elemento = formulario.elements[i];
            if(campoAComprobar(elemento)) {
                if (esIncorrecto(elemento)) {
                    event.preventDefault();
                    //boolean para comprobar si todos se pueden enviar, y fuera del for  hacer el collapse
                    //console.log("esincorrecto:" + elemento.name);
                    camposcorrectos = false;

                }
            }
        }
        if(camposcorrectos){
            $("#modala").collapse();

        }
    }

    function campoAComprobar(elemento) {
        if (elemento.name !== "_token" &&
            elemento.name !== "button"){
            return true;
        }
        return false;
    }


    function esIncorrecto(elemento){
        if(elemento.name === "name" || elemento.name === "message" ){
            return estaVacio(elemento);
        }
        else if (elemento.name === "email"){
            return emailIncorrecto(elemento);
        }
    }


    function estaVacio(campo){
        if (campo.value.length === 0) {
            return true;
        }
        else {
            return false;
        }
    }

    function emailIncorrecto(campo){
        if ( campo.value.indexOf("@") < 0 ||
            (campo.value.indexOf("@") > campo.value.lastIndexOf(".") )
        ){
            return true;
        }
        else {
            return false;
        }
    }

</script>


@endsection