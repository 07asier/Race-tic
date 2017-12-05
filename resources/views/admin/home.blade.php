@extends('layouts.adminapp')

@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Admin </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        Bienvenido Admin !
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
    <img src="images/raceticadmin.png"  width="150" height="100">
    </div>

    <br>
@endsection