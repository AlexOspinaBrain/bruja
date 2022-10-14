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
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <br>
                    <div class="row">
                        @if (isset($task->id))
                            <form action="{{ route('tareas.update',[$task]) }}" method="post">
                        @else
                            <form action="{{ route('tareas.store') }}" method="post">
                            
                        @endif
                            @csrf
                            @if (isset($task->id))
                                @method("PUT")
                                <input type="hidden" name="id" value="{{ $task->id }}"/>
                            @endif
                            <div class="mb-3">
                                <label class="form-label" for="ciudadanos_id">Ciudadano</label>
                                
                                <select class="form-control"  name="ciudadanos_id" value="{{$task->ciudadanos_id ?? old('ciudadanos_id')}}" >
                                    @foreach ($ciudadanos as $ciudadano)
                                        <option value="{{$ciudadano->id}}" {{  isset($task->ciudadanos_id) && $ciudadano->id === $task->ciudadanos_id ? 'selected' : ''}}> {{$ciudadano->name}} {{$ciudadano->surname}}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="day_id">Dia de la semana</label>
                                
                                <select class="form-control"  name="day_id" value="{{$task->day_id ?? old('day_id')}}" >
                                    @foreach ($days as $dayy)
                                        <option value="{{$dayy->id}}" {{  isset($task->day_id) && $dayy->id === $task->day_id ? 'selected' : ''}}> {{$dayy->day }}</option> 
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="task">Tarea</label>
                                <textarea id="task" name="task" class="form-control" placeholder="Tarea del ciudadano" aria-describedby="task" required >
                                    {{ $task->task ?? old('task') }}
                                </textarea>
                            </div>
                            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="mb-3">
                            <a href="{{ route('tareas.index') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
