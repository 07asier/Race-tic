@extends('layouts.app')

@section('content')

    <div class="">
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container" style="border-bottom:1px solid black">
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                    <hr>
                    <ul class="container details">
                        <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>{{ Auth::user()->email }}</p></li>
                        <li><p><i class="fa fa-envelope"></i>{{Auth::user()->email }}</p></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection