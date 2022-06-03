@extends('layouts.app')

@section('template_title')
    Alta Baja Ejemplare
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alta Baja Ejemplares') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alta-baja-ejemplares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Libro</th>
										<th>Cantidad Ejemplares</th>
										<th>Tipo</th>
										<th>Motivo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($altaBajaEjemplares as $altaBajaEjemplare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $altaBajaEjemplare->libro->titulo }}</td>
											<td>{{ $altaBajaEjemplare->cantidad_ejemplares }}</td>
											<td>{{ $altaBajaEjemplare->tipo }}</td>
											<td>{{ $altaBajaEjemplare->motivo }}</td>

                                            <td>
                                                <form action="{{ route('alta-baja-ejemplares.destroy',$altaBajaEjemplare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alta-baja-ejemplares.show',$altaBajaEjemplare->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alta-baja-ejemplares.edit',$altaBajaEjemplare->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $altaBajaEjemplares->links() !!}
            </div>
        </div>
    </div>
@endsection
