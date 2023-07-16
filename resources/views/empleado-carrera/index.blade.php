@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleado Carrera') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleado-carreras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Empleado</th>
										<th>Id Carrera</th>
										<th>Id Periodo</th>
										<th>Fecha</th>
										<th>Estado</th>
										<th>Usuariomodifica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleadoCarreras as $empleadoCarrera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleadoCarrera->empleado->CodigoEmpleado }}</td>
											<td>{{ $empleadoCarrera->carrera->NombreCarrera }}</td>
											<td>{{ $empleadoCarrera->periodo->NombrePeriodo }}</td>
											<td>{{ $empleadoCarrera->Fecha }}</td>
											<td>{{ $empleadoCarrera->Estado }}</td>
											<td>{{ $empleadoCarrera->UsuarioModifica }}</td>

                                            <td>
                                                <form action="{{ route('empleado-carreras.destroy',$empleadoCarrera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleado-carreras.show',$empleadoCarrera->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleado-carreras.edit',$empleadoCarrera->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleadoCarreras->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
