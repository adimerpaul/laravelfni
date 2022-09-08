@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Registro de mascotas
                        <a href="{{url('mascota/create')}}" class="btn btn-success"> Crear mascota</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Color</th>
                                <th>Raza</th>
                                <th>Dueño</th>
                                <th>Fecha nacimiento</th>
                                <th>Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($mascotas as $mascota)
                                    <tr>
                                        <td>{{$mascota->id}}</td>
                                        <td>{{$mascota->nombre}}</td>
                                        <td>{{$mascota->color}}</td>
                                        <td>{{$mascota->raza}}</td>
                                        <td>{{$mascota->dueno}}</td>
                                        <td>{{$mascota->fechaNacimiento}}</td>
                                        <td>
                                            <a href="{{url('mascota/'.$mascota->id.'/edit')}}" class="btn btn-warning">Editar</a>
                                            <form action="{{url('mascota/'.$mascota->id)}}" method="post">
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Eliminar</button>
                                                @method('DELETE')
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
