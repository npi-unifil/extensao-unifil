@extends('layout')

@section('cabecalho')
    Atividades
@endsection()

@section('conteudo')



@foreach ($posts as $post)
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">

        <h2 class="accordion-header text-warning bg-dark" id={{$post->id}}>
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target={{'#collapse'. $post->id}} aria-expanded="true" aria-controls={{$post->id}}>
                {{$post['title']}}
            </button>
        </h2>
        <div id={{ 'collapse' . $post->id}} class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
            <table class="table table-bordered">
                <tr class="table-dark align-middle table-hover">
                    <td>Descrição</td>
                    <td>Data de Entrega</td>
                    <td>Valor da atividade</td>
                    <td>Ações</td>
                </tr>
                <tr>
                    <td>{{$post['description']}}</td>
                    <td>{{date('d-m-Y', strtotime($post['date']))}}</td>
                    <td>{{$post['grade']}}</td>
                    {{--<td>{{$post['file']}}</td>--}}
                    <td class="flex d-flex gap-2 justify-content-center text-align-center">
                        <a href='/list/edit/{{$post->id}}'>
                            <button class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </button>
                        </a>
                    <form   action="/list/{{$post->id }}"
                            method="POST"
                            onsubmit="return confirm('Tem certeza que deseja remover {{$post->nome}} ?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class='btn btn-danger'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                    </form>
                </td>
                </tr>

        </table>
        </div>
    </div>
    </div>
    @endforeach
<a type="button" class="btn btn-success d-flex justify-content-center" href='form'>Criar nova atividade</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
@endsection()
