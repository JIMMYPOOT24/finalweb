@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Bienvenido</h1>
@stop

@section('content')
<div class="container">
    <main class="grid">
        <article>
            <img src="/images/proyectmaroma.png" alt="">
            <div class="text">
                <h3>INICIO</h3>
                <p>Puedes realizar los cambios a tu preferencia de la vista Inicio</p>
                <a href="/datosempresa"><button>Editar</button></a>
            </div>
        </article>
        <article>
            <img src="/images/proyectmaroma.png" alt="">
            <div class="text">
                <h3>NOSOTROS</h3>
                <p>Puedes realizar los cambios a tu preferencia de la vista Nosotros</p>
                <a href=""><button>Editar</button></a>
            </div>
        </article>

        <article>
            <img src="/images/proyectmaroma.png" alt="">
            <div class="text">
                <h3>SERVICIOS</h3>
                <p>Puedes realizar los cambios a tu preferencia de la vista Servicios</p>
                <a href=""> <button>Editar</button></a>
            </div>
        </article>


        <article>
            <img src="/images/proyectmaroma.png" alt="">
            <div class="text">
                <h3>PROYECTOS</h3>
                <p>Puedes realizar los cambios a tu preferencia de la vista Proyectos</p>
                <a href=""><button>Editar</button></a>
            </div>
        </article>
    </main>
</div>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('../css/stylebanner.css') }}" />

@stop

@section('js')
<script>

</script>
@stop