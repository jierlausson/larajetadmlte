@extends('adminlte::page')

@section('title', 'Clientes - Novo')

@section('content_header')
    <h1>CLIENTES - EDITAR</h1>
@stop

@section('content')
    <form method="POST" action="/client/{{ $client->id }}">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $client->name }}">
        </div>
        <div class="mb-6">
            <label for="age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $client->age }}">
        </div><br>
        <a class="btn btn-secondary" href="/client/index">Cancelar</a>
        <button type="submit" class="btn btn-primary">Atualizar</button>
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
