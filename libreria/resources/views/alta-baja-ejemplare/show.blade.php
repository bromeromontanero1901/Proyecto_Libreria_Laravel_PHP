@extends('layouts.app')

@section('template_title')
    {{ $altaBajaEjemplare->name ?? 'Show Alta Baja Ejemplare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Alta Baja Ejemplare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alta-baja-ejemplares.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $altaBajaEjemplare->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad Ejemplares:</strong>
                            {{ $altaBajaEjemplare->cantidad_ejemplares }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $altaBajaEjemplare->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $altaBajaEjemplare->motivo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
