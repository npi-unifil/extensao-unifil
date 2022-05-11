@extends('layout')

@section('cabecalho')
    Atividades
@endsection()

@section('conteudo')
<table class="table table-bordered" border='1'>
    <tr class="table-dark">
        <td>ID</td>
        <td>Nome da Atv</td>
        <td>Descrição</td>
        <td>Data de entrega</td>
        <td>Ações</td>
    </tr>
    <tr>
        @foreach ($posts as $post)
        <tr class="table-dark">
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['description']}}</td>
            <td>{{$post['date']}}</td>
            <td>
            <form   action="/list/{{$post->id }}"
                    method="POST"
                    onsubmit="return confirm('Tem certeza que deseja remover {{$post->nome}} ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class='btn btn-danger'>Deletar</button>
            </form>
        </td>
        </tr>
        @endforeach
    </tr>
</table>
<a type="button" class="btn btn-success" href='form'>Criar nova atividade</a>
@endsection()
