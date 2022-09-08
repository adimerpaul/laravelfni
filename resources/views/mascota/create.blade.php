@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Registrar datos de mascota</div>
                    <div class="card-body">
                        <form action="{{url('mascota')}}" method="POST">
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputnombre" class="col-sm-1 col-form-label">nombre</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputnombre" name="nombre">
                                </div>
                                <label for="inputcolor" class="col-sm-1 col-form-label">color</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputcolor" name="color">
                                </div>
                                <label for="inputraza" class="col-sm-1 col-form-label">raza</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputraza" name="raza">
                                </div>
                                <label for="inputdueno" class="col-sm-1 col-form-label">dueno</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="inputdueno" name="dueno">
                                </div>
                                <label for="inputfechaNacimiento" class="col-sm-1 col-form-label">fechaNacimiento</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control" id="inputfechaNacimiento" name="fechaNacimiento">
                                </div>
                                <div class="col-sm-12">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-success" type="submit">Crear mascota</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
