@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
<h1 class="text-center">Vista Home</h1>
@stop

@section('content')
{{-- <a href="datosempresa/create" class="btn btn-primary"> CREAR</a> --}}
<div class="container table-responsive table-responsive-sm table-responsive-lg table-responsive-md">
    <table class="table table-dark table-striped table-responsive">
        <thead class="text-Dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Misión</th>
                <th scope="col">Visión</th>
                <th scope="col">Imagen-banner</th>
                <th scope="col">Eslogan</th>
                <th scope="col">Url-Curriculum</th>
                <th scope="col">Icono-Visión</th>
                <th scope="col">Icono-Misión</th>
                <th scope="col">Acciones</th>

            </tr>
        <tbody>
            @foreach ($datosempresa as $datoempresa)
            <tr>
                <td>{{$datoempresa->id}}</td>
                <td>{{$datoempresa->descripcion}}</td>
                <td>{{$datoempresa->mision}}</td>
                <td>{{$datoempresa->vision}}</td>
                <td>{{$datoempresa->imagenbanner}}</td>
                <td>{{$datoempresa->slogan}}</td>
                <td>{{$datoempresa->url_curriculum}}</td>
                <td>{{$datoempresa->icon_mision}}</td>
                <td>{{$datoempresa->icon_vision}}</td>
                <td>
                    <a href="datosempresa/{{$datoempresa->id}}/edit" class="btn btn-danger btn-info">Editar</a>
                    {{-- <button class="btn btn-danger">Borrar</button> --}}
                </td>


            </tr>

            @endforeach
        </tbody>
        </thead>
    </table>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('../css/stylebanner.css') }}" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')


@stop