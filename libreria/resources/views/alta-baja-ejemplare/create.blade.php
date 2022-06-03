@extends('layouts.app')

@section('template_title')
    Create Alta Baja Ejemplare
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Alta Baja Ejemplare</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alta-baja-ejemplares.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('alta-baja-ejemplare.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
