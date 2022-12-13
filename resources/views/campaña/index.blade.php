@extends('layouts.app')

@section('template_title')
    Campaña
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Campaña') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('campañas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Ubicacion</th>
										<th>Tipo Sangre</th>
										<th>Unidad Requerida</th>
										<th>Descripcion</th>
										<th>Nombre Campañas</th>
										<th>User Id2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($campañas as $campaña)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $campaña->ubicacion }}</td>
											<td>{{ $campaña->tipo_sangre }}</td>
											<td>{{ $campaña->unidad_requerida }}</td>
											<td>{{ $campaña->descripcion }}</td>
											<td>{{ $campaña->nombre_campañas }}</td>
											<td>{{ $campaña->user_id2 }}</td>

                                            <td>
                                                <form action="{{ route('campañas.destroy',$campaña->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('campañas.show',$campaña->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('campañas.edit',$campaña->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $campañas->links() !!}
            </div>
        </div>
    </div>
@endsection
