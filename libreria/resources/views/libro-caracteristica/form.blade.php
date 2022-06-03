<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libro_id') }}
            {{ Form::select('libro_id', $libros, $libroCaracteristica->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('etiqueta_id') }}
            {{ Form::select('etiqueta_id', $etiquetas, $libroCaracteristica->etiqueta_id, ['class' => 'form-control' . ($errors->has('etiqueta_id') ? ' is-invalid' : ''), 'placeholder' => 'Etiqueta Id']) }}
            {!! $errors->first('etiqueta_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor') }}
            {{ Form::text('valor', $libroCaracteristica->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>