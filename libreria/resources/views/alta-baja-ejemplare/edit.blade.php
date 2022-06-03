@extends('layouts.app')

@section('template_title')
    Update Alta Baja Ejemplare
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Alta Baja Ejemplare</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alta-baja-ejemplares.update', $altaBajaEjemplare->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('alta-baja-ejemplare.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
