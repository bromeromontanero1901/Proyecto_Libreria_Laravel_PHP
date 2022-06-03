@extends('layouts.app')

@section('template_title')
    {{ $registroAsignacion->name ?? 'Show Registro Asignacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Registro Asignacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registro-asignacions.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $registroAsignacion->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Solicitud:</strong>
                            {{ $registroAsignacion->fecha_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Asignacion:</strong>
                            {{ $registroAsignacion->fecha_asignacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Entrega:</strong>
                            {{ $registroAsignacion->fecha_entrega }}
                        </div>
                        <div class="form-group">
                            <strong>User Solicitud:</strong>
                            {{ $registroAsignacion->user_solicitud }}
                        </div>
                        <div class="form-group">
                            <strong>User Prestamo:</strong>
                            {{ $registroAsignacion->user_prestamo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
