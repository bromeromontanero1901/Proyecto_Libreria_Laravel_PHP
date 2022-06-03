@extends('layouts.app')

@section('template_title')
    {{ $libro->name ?? 'Show Libro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Libro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('libros.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Isnb:</strong>
                            {{ $libro->isnb }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $libro->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $libro->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Version:</strong>
                            {{ $libro->version }}
                        </div>
                        <div class="form-group">
                            <strong>Num Ejemplares:</strong>
                            {{ $libro->num_ejemplares }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Elaborado:</strong>
                            {{ $libro->fecha_elaborado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
