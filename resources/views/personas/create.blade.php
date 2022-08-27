@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nueva Persona</h1>
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
            {!! Form::open([ 'route' => 'personas.store' ]) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Nombre']) !!}

                    @error('nombre')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('apellido_pat', 'Apellido Paterno') !!}
                    {!! Form::text('apellido_pat', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Apellido Paterno']) !!}

                    @error('apellido_pat')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('apellido_mat', 'Apellido Materno') !!}
                    {!! Form::text('apellido_mat', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Apellido Paterno']) !!}

                    @error('apellido_mat')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Telefono']) !!}

                    @error('telefono')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('ci', 'Carnet  ') !!}
                    {!! Form::text('ci', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Numero de Carnet']) !!}

                    @error('ci')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('sexo', 'Sexo') !!}
                    {!! Form::text('sexo', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Sexo']) !!}

                    @error('sexo')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('estado_civil', 'Estado Civil') !!}
                    {!! Form::text('estado_civil', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese el Estado Civil']) !!}

                    @error('estado_civil')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('direccion', 'Direccion') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control alert', 'placeholder' => 'Ingrese la Dirección']) !!}

                    @error('direccion')
                        <span class="txt-danger">{{$message}}</span>   
                    @enderror
                </div>





               

                {!! Form::submit('Crear Persona', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

 