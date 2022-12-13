@extends('layouts.app')

@section('titulo')
    <title>Citas</title>
@endsection

@section('breadDescr')
    <h4 class="mb-sm-0 font-size-18">Citas</h4>
@endsection

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body align-middle">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Agregar Cita
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 70px;">#</th>
                                    <th scope="col">Donador</th>
                                    <th scope="col">Donatorio</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>1</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="{{ url('cita') }}" class="text-dark">David McHenry</a></h5>
                                    </td>
                                    <td>david@skote.com</td>
                                    <td>
                                        125
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ url('cita') }}">Ver mas</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Borrar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>2</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="{{ url('cita') }}" class="text-dark">Frank Kirk</a></h5>
                                    </td>
                                    <td>frank@skote.com</td>
                                    <td>
                                        132
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ url('cita') }}">Ver mas</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Borrar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>3</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="{{ url('cita') }}" class="text-dark">Rafael Morales</a></h5>
                                    </td>
                                    <td>Rafael@skote.com</td>
                                    <td>
                                        112
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ url('cita') }}">Ver mas</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Borrar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>4</h5>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="{{ url('cita') }}" class="text-dark">Mark Ellison</a></h5>
                                    </td>
                                    <td>mark@skote.com</td>
                                    <td>
                                        121
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ url('cita') }}">Ver mas</a>
                                                <a class="dropdown-item" href="#">Editar</a>
                                                <a class="dropdown-item" href="#">Borrar</a>
                                            </div>
                                        </div>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="pagination pagination-rounded justify-content-center mt-4">
                                <li class="page-item disabled">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="javascript: void(0);" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
          <h1 class="modal-title fs-5" id="staticBackdropLabel">REGISTRO CITA</h1>
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
                <label for="inputFirstName" class="col-sm-2 col-form-label">Donatorio:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputSecondName" class="col-sm-2 col-form-label">Fecha:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputTypeblood" class="col-sm-2 col-form-label">Descripcion:</label>
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