@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>CLIENTES</h1>
@stop

@section('content')

    <p><a href="{{ route('client.create') }}" class="btn btn-success">Novo</a></p>
    <table class="table table-dark table-striped">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Ação</th>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th>{{ $client->id }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->age }}</td>
                    <td>
                        <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/client/{{ $client->id }}/edit" class="btn btn-info">Editar</a>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    @if(session()->has('status'))
        <script>
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Dados atualizados com sucesso!',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif
@stop
