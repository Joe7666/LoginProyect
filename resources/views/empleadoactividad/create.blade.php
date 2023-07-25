@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Agregar nuevo EmpleadoActividad</h1>
    <form action="{{ url('/empleadoactividad') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombreCompleto">Nombre Empleado:</label>
            <input type="text" class="form-control" id="nombreCompleto" name="nombreCompleto" required>
        </div>
        <div class="form-group">
            <label for="actividad">Actividad:</label>
            <input type="text" class="form-control" id="actividad" name="actividad" required>
        </div>
        <div class="form-group">
            <label for="fechaInicio">Fecha Inicio:</label>
            <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
        </div>
        <div class="form-group">
            <label for="fechaFin">Fecha Fin:</label>
            <input type="date" class="form-control" id="fechaFin" name="fechaFin" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="number" class="form-control" id="estado" name="estado" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop