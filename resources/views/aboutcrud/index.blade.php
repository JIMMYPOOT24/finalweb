@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
<h1 class="text-center">Vista Nosotros</h1>
@stop

@section('content')

<div class="row justify-content-center">

    <div class="card m-4 border-0" style="width: 18rem;">
        <img src="/iconos/crudhouse.png" class="card-img-top mx-auto d-block img-fluid" alt="...">
        <div class="card-body">
            <h5 class="p-1 fs-3">Datos Nosotros</h5>
            <p class="card-text">Usted puede realizar los cambios de su preferencia de la vista <b>Inicio</b> en el
                siguiente
                boton.</p>
            @foreach ($datosempresa as $datoempresa)

            <a href="datosempresa/{{$datoempresa->id}}/edit" class="btn btn-outline-primary btn-block">Editar</a>
            @endforeach
        </div>
    </div>

    <div class="card m-4  border-0 " style="width: 18rem;">
        <img src="/iconos/cardcarrusel.png" class="card-img-top mx-auto d-block img-fluid" alt="...">
        <div class="card-body">
            <h5 class="p-1 fs-3">Datos Carrusell</h5>
            <p>Usted puede realizar los cambios del carrusel de imagenes de los <b>Clientes</b> en el
                siguiente
                boton.</p>
            <a href="#" class="btn btn-outline-primary btn-block">Editar</a>
        </div>
    </div>

</div>

@stop

@section('css')
<link rel="stylesheet" href="{{ asset('../css/stylecrud.css') }}" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop

@section('js')


@stop