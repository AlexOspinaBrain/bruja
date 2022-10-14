@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ciudadanos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <div class="mb-3">
                        <a href="{{ route('ciudadanos.create') }}" class="btn btn-primary">Nuevo Ciudadano</a>
                    </div>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ciudadanos as $ciudadano)
                            <tr>
                                <td >{{$ciudadano->name}}</td>
                                <td >{{$ciudadano->surname}}</td>
                                <td >{{$ciudadano->age}}</td>
                                <td >
                                    <a class="btn btn-secondary" href="{{route('ciudadanos.edit',[$ciudadano])}}">
                                    Editar
                                    </a>
                                </td>
                                <td >
                                    <form action="{{ route('ciudadanos.destroy',[$ciudadano]) }}" method="POST" >
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Eliminar</button>
                                    </form></td>
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
