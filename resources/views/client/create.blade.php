@extends('adminlte::page')

@section('title', 'Clientes - Novo')

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('client.store') }}">
        @csrf
        <div class="mb-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-6">
            <label for="age" class="form-label">Idade</label>
            <input type="number" class="form-control" id="age" name="age">
        </div><br>
        <a class="btn btn-secondary" href="/client/index">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
