@extends('layouts.adminapp')

<link href="{{ asset('css/estilosadmin.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('../css/app.css') }}" rel="stylesheet" type="text/css">

@section('content')
    <h2 class="titulo">Panel de administración de usuarios</h2>

    <div id="gestorTabla">

        <table align="center" id="tabla" class="table">
            <tr class="cabecera">
                <th class="contenidoCabecera">Nombre</th>
                <th class="contenidoCabecera">Correo electrónico</th>
                <th class="contenidoCabecera">Eliminar</th>
                <th class="contenidoCabecera">Editar</th>
                <th class="contenidoCabecera">Confirmado</th>
            </tr>
            @foreach($usuarios as $key => $data)
                <tr>
                    <td class="contenidoTabla">{{ $data->name }}</td>
                    <td class="contenidoTabla">{{ $data->email }}</td>
                    <td class="contenidoTabla"><a href="adminEliminarUsuario/{{ $data -> id }}" class="boton eliminar">Eliminar</a></td>
                    <td class="contenidoTabla"><a href="{{ url('/adminEditarUsuario/'.$data->id) }}" class="boton editar">Editar</a></td>
                    <td class="contenidoTabla" id="confirmacion">
                        @if($data -> verified == 0)
                            <img src="../images/x_no.png" />
                        @else
                            <img src="../images/tick_si.png" />
                        @endif
                    </td>
                </tr>
        @endforeach

        <!--  -->

        </table>

    </div>
@endsection