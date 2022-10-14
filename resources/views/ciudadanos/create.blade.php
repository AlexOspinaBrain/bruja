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
                        @if (isset($ciudadano->id))
                            <form action="{{ route('ciudadanos.update',[$ciudadano]) }}" method="post">
                        @else
                            <form action="{{ route('ciudadanos.store') }}" method="post">
                            
                        @endif
                            @csrf
                            @if (isset($ciudadano->id))
                                @method("PUT")
                                <input type="hidden" name="id" value="{{ $ciudadano->id }}"/>
                            @endif
                            <div class="mb-3">
                                <label class="form-label" for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Nombre del ciudadano" aria-describedby="Nombre" required value="{{ $ciudadano->name ?? old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="surname">Apellido</label>
                                <input type="text" id="surname" name="surname" class="form-control" placeholder="Apellido del ciudadano" aria-describedby="Apellido" required value="{{ $ciudadano->surname ?? old('surname') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="surname">Edad</label>
                                <input type="number" maxlength="2" id="age" name="age" class="form-control" placeholder="Edad del ciudadano" aria-describedby="Edad" required value="{{ $ciudadano->age ?? old('age') }}">
                            </div>
                            <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="mb-3">
                            <a href="{{ route('ciudadanos.index') }}" class="btn btn-secondary">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
