@extends('layouts.app')

@section('titulo')
    <title>Campañas</title>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Campañas</h4>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body align-middle">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Agregar Campaña
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 100px">#</th>
                                <th scope="col">Nombre campaña</th>
                                <th scope="col">Ubicacion</th>
                                <th scope="col">Tipo de sangre</th>
                                <th scope="col">Unidad requerida</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('images/companies/img-1.png') }}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="{{ url('campaña') }}" class="text-dark">Campaña de acopio</a></h5>
                                </td>
                                <td>La paz B.C.S</td>
                                <td>O</td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('campaña') }}">Ver mas</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Borrar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/companies/img-1.png') }}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark">Campaña de acopio</a></h5>
                                </td>
                                <td>La paz B.C.S</td>
                                <td>O</td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('campaña') }}">Ver mas</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Borrar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('images/companies/img-1.png') }}" alt="" class="avatar-sm"></td>
                                <td>
                                    <h5 class="text-truncate font-size-14"><a href="javascript: void(0);" class="text-dark">Campaña de acopio</a></h5>
                                </td>
                                <td>La paz B.C.S</td>
                                <td>O</td>
                                <td>
                                    20
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ url('campaña') }}">Ver mas</a>
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <a class="dropdown-item" href="#">Borrar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center my-3">
                <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle me-2"></i> Cargar mas </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->
    
@endsection

@section('modal')
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">REGISTRO CAMPAÑA</h1>
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