<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreCarrera') }}
            {{ Form::text('NombreCarrera', $carrera->NombreCarrera, ['class' => 'form-control' . ($errors->has('NombreCarrera') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecarrera']) }}
            {!! $errors->first('NombreCarrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $carrera->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Facultad') }}
            {{ Form::text('Facultad', $carrera->Facultad, ['class' => 'form-control' . ($errors->has('Facultad') ? ' is-invalid' : ''), 'placeholder' => 'Facultad']) }}
            {!! $errors->first('Facultad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsuarioModifica') }}
            {{ Form::text('UsuarioModifica', $carrera->UsuarioModifica, ['class' => 'form-control' . ($errors->has('UsuarioModifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('UsuarioModifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>