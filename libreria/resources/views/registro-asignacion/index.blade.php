@extends('layouts.app')

@section('template_title')
    Registro Asignacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro Asignacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registro-asignacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Fecha Solicitud</th>
										<th>Fecha Asignacion</th>
										<th>Fecha Entrega</th>
										<th>User Solicitud</th>
										<th>User Prestamo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registroAsignacions as $registroAsignacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registroAsignacion->libro->titulo }}</td>
											<td>{{ $registroAsignacion->fecha_solicitud }}</td>
											<td>{{ $registroAsignacion->fecha_asignacion }}</td>
											<td>{{ $registroAsignacion->fecha_entrega }}</td>
											<td>{{ $registroAsignacion->user->name }}</td>
											<td>{{ $registroAsignacion->user2->name }}</td>

                                            <td>
                                                <form action="{{ route('registro-asignacions.destroy',$registroAsignacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registro-asignacions.show',$registroAsignacion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registro-asignacions.edit',$registroAsignacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $registroAsignacions->links() !!}
            </div>
        </div>
    </div>
@endsection
