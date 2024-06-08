@extends('adminlte::page')

@section('title', 'Panel de Control')

@section('content_header')
<h1>Crear una Nuevo País</h1>
@stop

@section('content')

<div class="container">

<h1>Agregar un Pais</h1>


    <form action="/paises" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre del País</label>
            <input type="text" class="form-control" id="nombresp" name="nombrep" tabindex="1">
        </div>
        <a href="/paises" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>


</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop