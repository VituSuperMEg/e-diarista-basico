@extends('layout')
@section('titulo')
    Listar Diárias
@endsection
@section('conteudo-principal')
    <h1>Lista de Diarias</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Nome Diarista</th>
                <th scope="col">Atendimento</th>
                <th scope="col">Valor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diarias as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nome_cliente }}</td>
                    <td>{{ $item->nome_diarista }}</td>
                    <td>{{ (new \DateTime($item->atendimento))->format('d/m/Y H:i') }}</td>
                    <td>R${{ number_format($item->valor, 2, ',', '.') }}</td>
                    <td><a href="{{ route('diarias.show', $item) }}" class="btn btn-success">Detalhes</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
