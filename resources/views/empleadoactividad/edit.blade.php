@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Editar EmpleadoActividad</h1>
    <form action="{{ url('/empleadoactividad/' . $data['idEmpActivid']) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="idEmpActivid">ID:</label>
            <input type="text" class="form-control" id="idEmpActivid" name="idEmpActivid" value="{{ $data['idEmpActivid'] }}" required>
        </div>
        <div class="form-group">
            <label for="nombreCompleto">Nombre Empleado:</label>
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" value="{{ $data['nombreCompleto'] }}" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad:</label>
            <input type="text" class="form-control" id="actividad" name="actividad" value="{{ $data['actividad'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio:</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" value="{{ $data['fechaInicio'] }}" required>
        </div>
        <div class="form-group">
            <label for="fechaFin">Fecha Fin:</label>
            <input type="date" class="form-control" id="fechaFin" name="fechaFin" value="{{ $data['fechaFin'] }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="number" class="form-control" id="estado" name="estado" value="{{ $data['estado'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
