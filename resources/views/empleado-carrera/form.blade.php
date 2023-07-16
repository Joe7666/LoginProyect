<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::select('id_empleado',$emp, $empleadoCarrera->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carrera') }}
            {{ Form::select('id_carrera',$carr, $empleadoCarrera->id_carrera, ['class' => 'form-control' . ($errors->has('id_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Id Carrera']) }}
            {!! $errors->first('id_carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_periodo') }}
            {{ Form::select('id_periodo',$per, $empleadoCarrera->id_periodo, ['class' => 'form-control' . ($errors->has('id_periodo') ? ' is-invalid' : ''), 'placeholder' => 'Id Periodo']) }}
            {!! $errors->first('id_periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::text('Fecha', $empleadoCarrera->Fecha, ['class' => 'form-control' . ($errors->has('Fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('Fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $empleadoCarrera->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsuarioModifica') }}
            {{ Form::text('UsuarioModifica', $empleadoCarrera->UsuarioModifica, ['class' => 'form-control' . ($errors->has('UsuarioModifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('UsuarioModifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>