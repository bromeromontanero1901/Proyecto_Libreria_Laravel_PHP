@extends('layouts.app')

@section('template_title')
    {{ $libroCaracteristica->name ?? 'Show Libro Caracteristica' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Libro Caracteristica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libro-caracteristicas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Libro Id:</strong>
                            {{ $libroCaracteristica->libro_id }}
                        </div>
                        <div class="form-group">
                            <strong>Etiqueta Id:</strong>
                            {{ $libroCaracteristica->etiqueta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $libroCaracteristica->valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
