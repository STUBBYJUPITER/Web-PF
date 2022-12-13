@extends('layouts.app')

@section('template_title')
    {{ $campaña->name ?? 'Show Campaña' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Campaña</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('campañas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $campaña->ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Sangre:</strong>
                            {{ $campaña->tipo_sangre }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad Requerida:</strong>
                            {{ $campaña->unidad_requerida }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $campaña->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Campañas:</strong>
                            {{ $campaña->nombre_campañas }}
                        </div>
                        <div class="form-group">
                            <strong>User Id2:</strong>
                            {{ $campaña->user_id2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
