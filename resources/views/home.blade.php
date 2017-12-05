@extends('layouts.app')

@section('content')
    <div>
    </br>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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

<div class="text-center">
    <img src="images/racetic.png" width="150" height="100">
</div>


@endsection
