@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <h3></h3>
       </div>
   </div>

    <div class="container">
        <div class="row">
            <div class=" "> <!-- col-md-8 -->
                <div class="well well-sm">
                    <h3>Contáctanos</h3>
                    <form id="formulario" action="contact" method="post">
                        {{ csrf_field() }}

                        <div id="errordiv" class="alert alert-danger" hidden>
                            <strong>Error!</strong>Rellena correctamente los campos.
                        </div>
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
                                <button type="submit" class="md-btn pull-right" id="btnContact" name="button">
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

   <script src="{{asset('../public/js/contacto.js')}}"></script>


@endsection