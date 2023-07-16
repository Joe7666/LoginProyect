<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombrePeriodo') }}
            {{ Form::text('NombrePeriodo', $periodo->NombrePeriodo, ['class' => 'form-control' . ($errors->has('NombrePeriodo') ? ' is-invalid' : ''), 'placeholder' => 'Nombreperiodo']) }}
            {!! $errors->first('NombrePeriodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $periodo->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaFin') }}
            {{ Form::text('FechaFin', $periodo->FechaFin, ['class' => 'form-control' . ($errors->has('FechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('FechaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $periodo->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsuarioModifica') }}
            {{ Form::text('UsuarioModifica', $periodo->UsuarioModifica, ['class' => 'form-control' . ($errors->has('UsuarioModifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('UsuarioModifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>