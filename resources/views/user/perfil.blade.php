@extends('layouts.app')

@section('content')

    <div class="">
        <div class="well well-sm-6">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container">
                        <hr class="my-4">
                        <h2>{{ Auth::user()->name }}</h2>

                    </div>
                    <hr>
                    <ul class="container details">
                        <li><i class="fa fa-envelope"></i>  Correo Electronico:   {{Auth::user()->email }}</li>
                        <br>
                        <br>
                        <li><i class="glyphicon glyphicon-lock"></i>  Contraseña: *******</li>
                    </ul>
                    <button type="button" data-toggle="modal" data-target="#login-modal" class="btn btn-default">Cambiar Contraseña</button>
                </div>
            </div>
            {{--

                        <form id="formulario" action='dato' method="get">

                            {{ csrf_field() }}
                            <input type="text" value="a"/>
                            <button type="button">Example</button>
                        </form>
            --}}

                           <a href='dato' onclick="event.preventDefault(); document.getElementById('formulario').submit();" class="btn btn-default">
                            Cambiar
                           </a>

                           <form id="formulario" action='dato' method="POST" style="display: none;">
                               {{ csrf_field() }}
                           </form>

           </div>
       </div>




       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
           <div class="modal-dialog">
               <div class="loginmodal-container">

                   <form action="dato" method="post">
                       {{ csrf_field() }}
                       <p>Contraseña actual</p>
                       <input type="password" name="oldpassword">
                       <p>Nueva Contraseña</p>
                       <input type="password" name="newpassowrd">
                       <p>Confirmar Contraseña</p>
                       <input type="password" name="password_confirmation" required>
                       <!--<input type="button" name="login" class="login loginmodal-submit" value="Cambiar">-->
                       <button type="submit" class="btn btn-block login loginmodal-submit">
                           Enviar</button>

                   </form>

                   <div class="login-help">
                       <a href="#">Register</a> - <a href="#">Forgot Password</a>
                   </div>
               </div>
           </div>
       </div>

   @endsection