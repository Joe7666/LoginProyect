@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Listado de EmpleadoActividad</h1>
    <a href="{{ url('/empleadoactividad/create') }}" class="btn btn-primary">Agregar nuevo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Empleado</th>
                <th>Actividad</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $empleadoactividad)
                <tr>
                    <td>{{ $empleadoactividad['idEmpActivid'] }}</td>
                    <td>{{ $empleadoactividad['nombreCompleto'] }}</td>
                    <td>{{ $empleadoactividad['actividad'] }}</td>
                    <td>{{ $empleadoactividad['fechaInicio'] }}</td>
                    <td>{{ $empleadoactividad['fechaFin'] }}</td>
                    <td>{{ $empleadoactividad['estado'] }}</tdss>
                    <td>
                        <a href="{{ url('/empleadoactividad/' . $empleadoactividad['idEmpActivid']) }}" class="btn btn-info">Ver</a>
                        <a href="{{ url('/empleadoactividad/' . $empleadoactividad['idEmpActivid'] . '/edit') }}" class="btn btn-primary">Editar</a>
                        <form action="{{ url('/empleadoactividad/' . $empleadoactividad['idEmpActivid']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
