@extends('layouts.app')

@section('template_title')
    {{ $etiqueta->name ?? 'Show Etiqueta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Etiqueta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('etiquetas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $etiqueta->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
