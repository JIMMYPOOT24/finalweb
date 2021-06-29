@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
<h1>Vista Home</h1>
@stop

@section('content')
{{-- <a href="datosempresa/create" class="btn btn-primary"> CREAR</a> --}}

<div class="table-responsive ">
    <table class="table table-dark table-striped">
        <thead class="text-Dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripción</th>
                <th scope="col">Misión</th>
                <th scope="col">Visión</th>
                <th scope="col">Url-Logo</th>
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
                <td>{{$datoempresa->urllogo}}</td>
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
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')

    @stop