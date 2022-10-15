@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Agenda') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <button class="nav-link active" id="nav-lunes-tab" data-bs-toggle="tab" data-bs-target="#nav-lunes" type="button" role="tab" aria-controls="nav-lunes" aria-selected="true">LUNES</button>
                          <button class="nav-link" id="nav-martes-tab" data-bs-toggle="tab" data-bs-target="#nav-martes" type="button" role="tab" aria-controls="nav-martes" aria-selected="false">MARTES</button>
                          <button class="nav-link" id="nav-miercoles-tab" data-bs-toggle="tab" data-bs-target="#nav-miercoles" type="button" role="tab" aria-controls="nav-miercoles" aria-selected="false">MIERCOLES</button>
                          <button class="nav-link" id="nav-jueves-tab" data-bs-toggle="tab" data-bs-target="#nav-jueves" type="button" role="tab" aria-controls="nav-jueves" aria-selected="false">JUEVES</button>
                          <button class="nav-link" id="nav-viernes-tab" data-bs-toggle="tab" data-bs-target="#nav-viernes" type="button" role="tab" aria-controls="nav-viernes" aria-selected="false">VIERNES</button>
                          <button class="nav-link" id="nav-sabado-tab" data-bs-toggle="tab" data-bs-target="#nav-sabado" type="button" role="tab" aria-controls="nav-sabado" aria-selected="false">SABADO</button>
                          <button class="nav-link" id="nav-domingo-tab" data-bs-toggle="tab" data-bs-target="#nav-domingo" type="button" role="tab" aria-controls="nav-domingo" aria-selected="false">DOMINGO</button>
                        </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-lunes" role="tabpanel" aria-labelledby="nav-lunes-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($lunes as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-martes" role="tabpanel" aria-labelledby="nav-martes-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($martes as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-miercoles" role="tabpanel" aria-labelledby="nav-miercoles-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($miercoles as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
  
                        </div>
                        <div class="tab-pane fade" id="nav-jueves" role="tabpanel" aria-labelledby="nav-jueves-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($jueves as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="tab-pane fade" id="nav-viernes" role="tabpanel" aria-labelledby="nav-viernes-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($viernes as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="tab-pane fade" id="nav-sabado" role="tabpanel" aria-labelledby="nav-sabado-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($sabado as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                        <div class="tab-pane fade" id="nav-domingo" role="tabpanel" aria-labelledby="nav-domingo-tab" tabindex="0">
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">Ciudadano</th>
                                      <th scope="col">Tarea</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                            @foreach ($domingo as $item)
                                <tr>
                                    <td>{{$item->ciudadano->name}} {{$item->ciudadano->surname}}</td>
                                    <td>{{$item->task}}</td>
                                </tr>
                            @endforeach
                                </tbody>
                            </table>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
