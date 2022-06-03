@extends('layouts.app')

@section('template_title')
    Update Registro Asignacion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Registro Asignacion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('registro-asignacions.update', $registroAsignacion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('registro-asignacion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
