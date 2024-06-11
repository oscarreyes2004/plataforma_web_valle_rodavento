@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Persona</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('persona.index') }}"> Volver</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>¡Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('persona.update', $persona->id_pers) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="nom" value="{{ $persona->nom }}" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellido Paterno:</strong>
                        <input type="text" name="ap" value="{{ $persona->ap }}" class="form-control" placeholder="Apellido Paterno">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellido Materno:</strong>
                        <input type="text" name="am" value="{{ $persona->am }}" class="form-control" placeholder="Apellido Materno">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Teléfono:</strong>
                        <input type="text" name="num_tel" value="{{ $persona->num_tel }}" class="form-control" placeholder="Teléfono">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>RFC:</strong>
                        <input type="text" name="rfc" value="{{ $persona->rfc }}" class="form-control" placeholder="RFC">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Correo Electrónico:</strong>
                        <input type="email" name="corre_elect" value="{{ $persona->corre_elect }}" class="form-control" placeholder="Correo Electrónico">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>

        </form>
    </div>
@endsection
