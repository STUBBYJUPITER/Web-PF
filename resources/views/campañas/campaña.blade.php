@extends('layouts.app')

@section('titulo')
    <title>Campaña</title>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Campaña</h4>
@endsection

@section('contenido')
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <div class="flex-shrink-0 me-4">
                    <img src="{{ asset('images/companies/img-1.png') }}" alt="" class="avatar-sm">
                </div>

                <div class="flex-grow-1 overflow-hidden">
                    <h5 class="text-truncate font-size-15">Skote Dashboard UI</h5>
                    <p class="text-muted">Separate existence is a myth. For science, music, sport, etc.</p>
                </div>
            </div>

            <h5 class="font-size-15 mt-4">Descripcion de la campaña :</h5>

            <p class="text-muted">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc,</p>

            <div class="text-muted mt-4">
                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> To achieve this, it would be necessary</p>
                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Separate existence is a myth.</p>
                <p><i class="mdi mdi-chevron-right text-primary me-1"></i> If several languages coalesce</p>
            </div>
            
            <div class="row task-dates">
                <div class="col-sm-4 col-6">
                    <div class="mt-4">
                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Start Date</h5>
                        <p class="text-muted mb-0">08 Sept, 2019</p>
                    </div>
                </div>

                <div class="col-sm-4 mt-4">
                    <a class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar Campaña <i class="mdi mdi-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('modal')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">EDITAR CAMPAÑA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nombre campaña:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputFirstName" class="col-sm-2 col-form-label">Ubicacion:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSecondName" class="col-sm-2 col-form-label">Tipo de sangre:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTypeblood" class="col-sm-2 col-form-label">Unidad requerida:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">CERRAR</button>
          <button type="button" class="btn btn-success">ENVIAR</button>
        </div>
      </div>
    </div>
  </div>
@endsection