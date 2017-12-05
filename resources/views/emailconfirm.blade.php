@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro Confirmado</div>
                <div class="panel-body">
                    Tu cuenta ha sido verificada. Click aqui: <a href={{url('/login')}}>LOGIN</a>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection