@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    
        <a href="{{route('personas.create')}}" class="btn btn-sm btn-success float-right">Agregar Persona</a>
   

    <h1>Lista de Personas</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>

    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <td>Nombre Completo</td>
                        <td>Telefono</td>
                        <td>Carnet</td>
                        <td>Sexo</td>
                        <td>Estado civil</td>
                        <td>Dirección</td> 

                        <td colspan="2"></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->id}}</td>
                            <td>{{ $persona->nombre.' '.$persona->apellido_pat.' '.$persona->apellido_mat}}</td> 
                            <td>{{ $persona->telefono }} </td>
                            <td>{{ $persona->ci }}</td>
                            <td>{{ $persona->sexo }}</td>
                            <td>{{ $persona->estado_civil }}</td>
                            <td>{{ $persona->direccion }}</td>
                            <td width="10px"> 
                                    <a href="{{route('personas.edit', $persona)}}" class="btn btn-primary btn-sm">Editar</a>
   
                            </td>
                            <td width="10px"> 
                                    <form action="{{route('personas.destroy', $persona)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm" >
                                            Eliminar
                                        </button>
                                    </form>
                              
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop
