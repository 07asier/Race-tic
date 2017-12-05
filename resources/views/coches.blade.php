@extends('layouts.app')

@section('content')

    <script type="text/javascript">

        window.onload = init;

        // asocia los eventos necesarios
        function init() {
            let formulario = document.getElementById("formulario");
            formulario.addEventListener("submit", validar);
            formulario.elements["problema"].addEventListener("keypress", longitudMax);
        }

        // previene escribir más caracteres de los permitidos en el campo "problema"
        function longitudMax(event){
            if (this.value.length === 100){
                alert("El tamaño máximo del campo es 100.");
                event.preventDefault();
            }
        }

        // comprueba si el formulario está rellenado correctamente
        function validar(event){
            let formulario = document.getElementById("formulario");
            for (let i=0;i<formulario.elements.length;i++){
                let elemento = formulario.elements[i];
                if(esIncorrecto(elemento)){
                    elemento.className = "error";
                    event.preventDefault();
                }
                else {
                    elemento.className = "correcto";
                }
            }
        }

        // dice si el campo es incorrecto en funcion del tipo de campo
        function esIncorrecto(elemento){
            if(elemento.name === "numserie" || elemento.name === "marca" || elemento.name === "motor"){
                return estaVacio(elemento);
            }
            else if (elemento.name === "modelo"){
                return telefonoIncorrecto(elemento);
            }
            else if (elemento.name === "mensaje"){
                return emailIncorrecto(elemento);
            }
        }

        // comprueba si el campo está vacío
        function estaVacio(campo){
            if (campo.value.length === 0) {
                return true;
            }
            else {
                return false;
            }
        }

        // comprueba si el campo cumple los requisitos de un número de telefono
        function telefonoIncorrecto(campo){
            if (campo.value.length < 9 || isNaN(campo.value)){
                return true;
            }
            else {
                return false;
            }
        }

        // comprueba si el campo cumple los requisitos de un email válido
        function emailIncorrecto(campo){
            if (  campo.value.indexOf("@") < 0 ||
                (campo.value.indexOf("@") > campo.value.lastIndexOf(".") )
            ){
                return true;
            }
            else {
                return false;
            }
        }

    </script>



    <div class="container">
        <div class="row">
            <h3>Añade tu coche</h3>
        </div>
    </div>

    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-8 "> <!-- col-md-8 -->
                <div class="">
                    <form>
                        <div class="row">

                            <div class="">
                                <div class="form-group">
                                    <label for="numserie">
                                        Numero de serie</label>
                                    <div class="input-group">
                                <span class="">
                                </span>
                                        <input type="text" class="form-control" id="numserie" placeholder="" required="required" /></div>
                                </div>





                                <div class="form-group">
                                    <label for="subject">
                                        Marca</label>
                                    <select id="subject" name="marca" class="form-control" required="required">
                                        <option value="na" selected="">Escoja uno por favor:</option>
                                        <option value="service">AUDI</option>
                                        <option value="suggestions">BMW</option>
                                        <option value="product">NISSAN</option>
                                        <option value="product">TOYOTA</option>
                                        <option value="product">HONDA</option>
                                        <option value="product">FORD</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="motor">
                                    Motorizacion</label>
                                <div class="input-group">
                                <span class="">
                                </span>
                                    <input type="text" class="form-control" id="motor" placeholder="" required="required" /></div>
                            </div>

                            <div class="form-group">
                                <label for="modelo">
                                    Modelo</label>
                                <div class="input-group">
                                <span class="">
                                </span>
                                    <input type="text" class="form-control" id="motor" placeholder="" required="required" /></div>
                            </div>


                            <div class="">
                                <div class="form-group">
                                    <label for="name">
                                        Mensaje</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






@endsection