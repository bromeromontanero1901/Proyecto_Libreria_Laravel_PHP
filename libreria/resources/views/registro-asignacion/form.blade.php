<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('libro_id') }}
            {{ Form::select('libro_id', $libros, $registroAsignacion->libro_id, ['class' => 'form-control' . ($errors->has('libro_id') ? ' is-invalid' : ''), 'placeholder' => 'Libro Id']) }}
            {!! $errors->first('libro_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_solicitud') }}
            {{ Form::text('fecha_solicitud', $registroAsignacion->fecha_solicitud, ['class' => 'form-control' . ($errors->has('fecha_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Solicitud']) }}
            {!! $errors->first('fecha_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_asignacion') }}
            {{ Form::text('fecha_asignacion', $registroAsignacion->fecha_asignacion, ['class' => 'form-control' . ($errors->has('fecha_asignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Asignacion']) }}
            {!! $errors->first('fecha_asignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_entrega') }}
            {{ Form::text('fecha_entrega', $registroAsignacion->fecha_entrega, ['class' => 'form-control' . ($errors->has('fecha_entrega') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Entrega']) }}
            {!! $errors->first('fecha_entrega', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_solicitud') }}
            {{ Form::select('user_solicitud', $usuarios, $registroAsignacion->user_solicitud, ['class' => 'form-control' . ($errors->has('user_solicitud') ? ' is-invalid' : ''), 'placeholder' => 'User Solicitud']) }}
            {!! $errors->first('user_solicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_prestamo') }}
            {{ Form::select('user_prestamo', $usuarios2, $registroAsignacion->user_prestamo, ['class' => 'form-control' . ($errors->has('user_prestamo') ? ' is-invalid' : ''), 'placeholder' => 'User Prestamo']) }}
            {!! $errors->first('user_prestamo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>