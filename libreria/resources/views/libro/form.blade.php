<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('isnb') }}
            {{ Form::text('isnb', $libro->isnb, ['class' => 'form-control' . ($errors->has('isnb') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Normalizado de 13 digitos']) }}
            {!! $errors->first('isnb', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $libro->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $libro->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('version') }}
            {{ Form::text('version', $libro->version, ['class' => 'form-control' . ($errors->has('version') ? ' is-invalid' : ''), 'placeholder' => 'Version']) }}
            {!! $errors->first('version', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('num_ejemplares') }}
            {{ Form::text('num_ejemplares', $libro->num_ejemplares, ['class' => 'form-control' . ($errors->has('num_ejemplares') ? ' is-invalid' : ''), 'placeholder' => 'Numero de Ejemplares']) }}
            {!! $errors->first('num_ejemplares', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_elaborado') }}
            {{ Form::text('fecha_elaborado', $libro->fecha_elaborado, ['class' => 'form-control' . ($errors->has('fecha_elaborado') ? ' is-invalid' : ''), 'placeholder' => 'YYYY-MM-DD']) }}
            {!! $errors->first('fecha_elaborado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>