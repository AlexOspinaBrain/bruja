@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Tareas') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <div class="mb-3">
                        <a href="{{ route('tareas.create') }}" class="btn btn-primary">Nueva Tarea</a>
                    </div>
                    <br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Ciudadano</th>
                            <th scope="col">Dia</th>
                            <th scope="col">Tarea</th>
                            <th scope="col">Modificar</th>
                            <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $taskk)
                            <tr>
                                <td >{{$taskk->id}}</td>
                                <td >{{$taskk->ciudadano->name}} {{$taskk->ciudadano->surname}}</td>
                                <td >{{$taskk->day->day}}</td>
                                <td >{{$taskk->task}}</td>
                                <td >
                                    <a class="btn btn-secondary" href="{{route('tareas.edit',[$taskk])}}">
                                    Editar
                                    </a>
                                </td>
                                <td >
                                    <form action="{{ route('tareas.destroy',[$taskk]) }}" method="POST" >
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
