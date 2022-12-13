@extends('layouts.app')

@section('titulo')
    <title>Cita</title>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Cita</h4>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-6">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Donador</h5>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">Cynthia Price</h5>
                            <p class="text-muted mb-0 text-truncate">-</p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <a class="btn btn-primary waves-effect waves-light btn-sm" href="{{ url('usuario') }}">Ver perfil <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Donatario</h5>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">Cynthia Price</h5>
                            <p class="text-muted mb-0 text-truncate">-</p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a class="btn btn-primary waves-effect waves-light btn-sm" href="{{ url('usuario') }}">Ver perfil <i class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="card col-6">
            <div class=" mt-4">
                <a class="btn btn-primary waves-effect waves-light btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Editar Cita <i class="mdi mdi-arrow-right ms-1"></i></a>
            </div>
            <div class="card-body">
                <h4 class="card-title mb-4">Informacion de la cita</h4>

                <p class="text-muted mb-4">lugar de la descripcion.</p>
                <div class="table-responsive">
                    <table class="table table-nowrap mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Nombre donador :</th>
                                <td>Cynthia Price</td>
                            </tr>
                            <tr>
                                <th scope="row">Nombre donatario :</th>
                                <td>Cynthia Price</td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha de la cita :</th>
                                <td>17/08/1995</td>
                            </tr>
                        </tbody>
                    </table>
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
          <h1 class="modal-title fs-5" id="staticBackdropLabel">EDITAR CITA</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Donador:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputFirstName" class="col-sm-2 col-form-label">Donatario:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSecondName" class="col-sm-2 col-form-label">Descripcion:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail">
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