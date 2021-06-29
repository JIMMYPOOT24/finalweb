@extends('adminlte::page')

@section('title', 'Editar Home')

@section('content_header')
<h1>Editar home</h1>
@stop

@section('content')

<form action="/datosempresa/{{$datoempresa->id}}/" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-4">
        {{-- <label for="" class="form-label">Descripción</label> --}}
        {{-- <input size="10" type="text" name="descripcion" id="descripcion" class="form-control" value="{{$datoempresa->descripcion}}">
        --}}
        <div class="mb-3">
            <label for="mensaje" class="form-label fw-bold text-primary ">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="form-control "
                aria-label="With textarea">{{$datoempresa->descripcion}}</textarea>
        </div>
    </div>
    <div class="mb-3 mt-2">
        <div class="mb-3 ">
            <label for="mensaje" class="form-label fw-bold text-primary">Misión:</label>
            <textarea name="mision" id="mision" class="form-control">{{$datoempresa->mision}}</textarea>
        </div>
    </div>
    <div class="mb-3">
        <label for="" class="form-label fw-bold text-primary">Visión:</label>
        <textarea type="text" name="vision" id="vision" class="form-control">{{$datoempresa->vision}}</textarea>

        <div class="mb-3">
            <label for="" class="form-label fw-bold text-primary">Url-Logo</label>

            <input type="file" name="file" id="urllogo" accept="image/*">
            <br>
            @error('file')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

    </div>
    <div class="mb-3">
        <label for="" class="form-label fw-bold text-primary">Eslogan</label>
        <input type="text" name="slogan" id="slogan" class="form-control" value="{{$datoempresa->slogan}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label fw-bold text-primary">Url-Curriculum</label>
        <input type="text" name="url_curriculum" id="url_curriculum" class="form-control"
            value="{{$datoempresa->url_curriculum}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label fw-bold text-primary">Icono-Visión</label>
        <input type="text" name="icon_mision" id="icon_mision" class="form-control"
            value="{{$datoempresa->icon_mision}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label fw-bold text-primary">Icono-Misión</label>
        <input type="text" name="icon_vision" id="icon_vision" class="form-control"
            value="{{$datoempresa->icon_vision}}">
    </div>
    <a href="/datosempresa" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!'); 
</script>
@stop