@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleado Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleado-carreras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $empleadoCarrera->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carrera:</strong>
                            {{ $empleadoCarrera->id_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Id Periodo:</strong>
                            {{ $empleadoCarrera->id_periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $empleadoCarrera->Fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $empleadoCarrera->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariomodifica:</strong>
                            {{ $empleadoCarrera->UsuarioModifica }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop