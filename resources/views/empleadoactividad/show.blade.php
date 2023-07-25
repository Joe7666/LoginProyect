@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Detalles de EmpleadoActividad</h1>
    <p><strong>ID:</strong> {{ $data['idEmpActivid'] }}</p>
    <p><strong>Nombre Empleado:</strong> {{ $data['nombreCompleto'] }}</p>
    <p><strong>Actividad:</strong> {{ $data['actividad'] }}</p>
    <p><strong>Fecha Inicio:</strong> {{ $data['fechaInicio'] }}</p>
    <p><strong>Fecha Fin:</strong> {{ $data['fechaFin'] }}</p>
    <p><strong>Estado:</strong> {{ $data['estado'] }}</p>
    <a href="{{ url('/empleadoactividad/' . $data['idEmpActivid'] . '/edit') }}" class="btn btn-primary">Editar</a>
    <form action="{{ url('/empleadoactividad/' . $data['idEmpActivid']) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
