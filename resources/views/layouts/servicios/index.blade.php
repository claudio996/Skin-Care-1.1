@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <div class="container">
        <h2></h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus" aria-hidden="true"></i>

        </button>

        <div class="row mt-2">
            <div class="col-md-12">
                <table class="table table-striped" id="PromocionesTable">
                    <thead class="bg-secondary">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Zonas</th>
                            <th scope="col">Min de sesiones</th>
                            <th scope="col">Max de sesiones</th>

                            <th scope="col">$ Precio x minima</th>
                            <th scope="col">$ Precio x maxima</th>
                            <th scope="col">Tipo</th>

                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($servicios as $servicio)
                            <tr>
                                <td>{{ $servicio['id'] }}</td>
                                <td>
                                    {{ $servicio->servicios_id }}
                                </td>

                                <td>{{ $servicio['nombre'] }}</td>

                                <td>
                                    {{ $servicio->sexo }}
                                </td>
                                <td>
                                    {{ $servicio['zonas'] }}
                                </td>

                                <td>
                                    {{ $servicio['cantidad_min_sesion'] }}
                                </td>


                                <td>
                                    {{ $servicio['cantidad_max_sesion'] }}
                                </td>

                                <td>
                                    {{ $servicio['precio_min_sesion'] }}
                                </td>

                                <td>
                                    {{ $servicio['precio_max_sesion'] }}
                                </td>

                                <td>
                                    {{ $servicio['tipo_id'] }}
                                </td>

                                <td>
                                    {{ $servicio['estado'] == 1 ? 'Activo' : 'Inactivo' }}
                                </td>

                                <td><button class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="container text-center">

                <div class="modal-dialog modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <h5 class="modal-title" id="exampleModalLabel">Nueva Promoción</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ url('admin/servicios-store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="card">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="exampleInputNombre">Tipo de
                                                                        Servicio:</label>
                                                                    <select id="tipo" class="form-control "
                                                                        name= "tipo">

                                                                        @foreach ($tipo_servicios as $tipos)
                                                                            <option value="{{ $tipos->id }}">
                                                                                {{ $tipos->nombre }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputNombre">Nombre del
                                                                        servicio:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="name" id="name">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputNombre">Sexo:</label>
                                                                    <select class="form-control"
                                                                        aria-label="Default select example" name="sexo"
                                                                        id="sexo">
                                                                        <option disabled>Seleccione sexo</option>
                                                                        <option value="1">Masculino</option>
                                                                        <option value="2">Femenino</option>
                                                                        <option value="2">Sin Especificar</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Minima de
                                                                        sesiones:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="cant_min_sesion" aria-describedby="emailHelp"
                                                                        placeholder="Enter your name" name="cant_min">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Ingrese minima cantidad
                                                                        de sesiones</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputTipo">Maxima de
                                                                        sesiones:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="max_sesion" name="cant_max"
                                                                        aria-describedby="emailText" placeholder="ipo">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Ingrese la cantidad
                                                                        maxima de sesiones.</small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Precio x
                                                                        minima:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="min_price" aria-describedby="emailHelp"
                                                                        placeholder="Enter your name" name="min_price">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Ingrese precio por
                                                                        minima de sesiones</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Precio x
                                                                        maxima:</label>
                                                                    <input type="text" class="form-control"
                                                                        id="cantidad_maxima" aria-describedby="emailHelp"
                                                                        placeholder="Enter your name" name="max_price">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Ingrese precio por
                                                                        maxima de sesiones</small>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Descuento:</label>
                                                                    <input type="number" class="form-control"
                                                                        id="descuento" aria-describedby="emailHelp"
                                                                        placeholder="Enter your name" name="descuento">
                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Ingrese
                                                                        descuento</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Descripción:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="descripcion">

                                                                    <small id="emailHelp"
                                                                        class="form-text text-muted">Descripción</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Imagen:</label>
                                                                <input type="file" class="form-control" id="imagen"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter your name" name="imagen">
                                                                <small id="emailHelp"
                                                                    class="form-text text-muted">Seleccione una imagen
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card p-1">
                                                                <label for="exampleInputEmail1">Zonas:</label>

                                                                <select id="miSelect" class="form-control "
                                                                    name="zonas[]" multiple>

                                                                    @foreach ($zonas as $zona)
                                                                        <option value="{{ $zona->nombre }}">
                                                                            {{ $zona->nombre }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#PromocionesTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });

        });

        $(document).ready(function() {
            $('#miSelect').select2();


            // function agregarNuevoValor() {
            //     var nuevoValor = '6'; // Puedes obtener el valor desde un input o cualquier otra fuente
            //     var nuevoTexto = 'Nuevo Valor'; // Puedes obtener el texto desde un input o cualquier otra fuente

            //     // Crear una nueva opción y agregarla al select
            //     var nuevaOpcion = new Option(nuevoTexto, nuevoValor);
            //     $('#miSelect').append(nuevaOpcion);

            //     // Actualizar el Select2 para mostrar la nueva opción agregada
            //     $('#miSelect').trigger('change');
            // }
        });
    </script>
@stop
