<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libro_id') }}
            {{ Form::select('libro_id', $libros, $altaBajaEjemplare->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad_ejemplares') }}
            {{ Form::text('cantidad_ejemplares', $altaBajaEjemplare->cantidad_ejemplares, ['class' => 'form-control' . ($errors->has('cantidad_ejemplares') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Ejemplares']) }}
            {!! $errors->first('cantidad_ejemplares', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $altaBajaEjemplare->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $altaBajaEjemplare->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>