@extends('layouts.adminapp')

<link href="{{ asset('../css/estilosadmin.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css" >

@section('content')
    <table>
        <form method="post" action="{{ url('/adminActualizarUsuario/'.$data->id) }}">
            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <div>
                <table align="center" class="editor table">
                    <tr>
                        <th class="col-lg-4 col-sm-12 cabeceraEditor">Nombre</th>
                        <th class="col-lg-4 col-sm-12 cabeceraEditor">Email</th>
                        <th class="col-lg-4 col-sm-12 cabeceraEditor">Actualizar</th>
                    </tr>
                    <tr>
                        <td class="col-lg-4 col-sm-12"><input id="campos" required type="text" name='name' value="{{ $data->name }}"/></td>
                        <td class="col-lg-4 col-sm-12"><input id="campos" required type="text" name='email' value="{{ $data->email }}"/></td>
                        <td class="col-lg-4 col-sm-12"><input id="act" class="boton actualizar" type="submit" value="Actualizar perfil" /></td>
                    </tr>
                </table>
            </div>
        </form>
    </table>
@endsection