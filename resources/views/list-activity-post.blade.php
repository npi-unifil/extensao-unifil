@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Atividades</div>
        </div>
    </x-slot>

    @section('conteudo')
    <x-slot>

        <div class="corrigir">
        <div class=" body-card card-body">
    @foreach ($posts as $post)
    <div class="accordion-card  accordion-config">
        <div class=" accordions accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-card accordion-item">

                <h2 class="accordion-header text-warning bg-dark" id={{ $post->id }}>
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target={{ '#collapse' . $post->id }} aria-expanded="true" aria-controls={{ $post->id }}>
                        {{ $post['title'] }}
                    </button>
                </h2>
                <div id={{ 'collapse' . $post->id }} class="accordion-collapse collapse " aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="card text-center">
                            <div class="card-header">
                                <h5 class="card-title">{{$post['title']}}</h5>
                            </div>
                                <div class="card-body">
                                    <p>Nota: {{ $post['grade'] }}</p>
                                    <p class="card-text">{{$post['description']}}</p>
                                    <div class="flex d-flex gap-2 justify-content-center text-align-center">
                                    <a href='/list/edit/{{ $post->id }}'>
                                        <button class="btn edit-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                        </button>
                                    </a>

                                    <form action="/list/{{ $post->id }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja remover {{ $post->nome }} ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class='btn btn-danger'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path
                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <h6>Data de Entrega</h6>{{ date('d-m-Y', strtotime($post['date'])) }}
                            </div>
                        </div>


                        </table>
                    </div>
                </div>
            </div>
            </div>
    @endforeach
    <div class="newActivity">
    <a type="button" class="button btn " href='form'>Criar nova atividade</a>
</div>
</div>
</div>
</div>
</x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


<style>

    .card-body {
        width: 100% !important;
    }

    .corrigir {
        display: flex !important;
        justify-content: center !important;
        width: 100%;
    }

    .edit-button {
        background-color: #fb923c !important;
        color: #ffff !important;
    }

    .accordion-card{
        width: 100% !important;
    }

    .accordion-item {

        background-color: #fb923c !important;
    }

    .accordion-button {
        background-color: #ddd !important;
    }

    .button{
        color: #ffff !important;
        background-color: #fb923c !important;
        display:flex;
        width:50%;
        justify-content: center;
        align-content: center;
        opacity: 1;
    }

    .button:hover {
        opacity: 2;
        background-color: #f97316 !important;
        color: #4b5563 !important;
    }

    .newActivity{

        width:100%;
        height: 100%;
        display:flex;
        margin-top:4px;
        justify-content: center;
    }

    .header-card {
        color: #ffff;
        background-color: #fb923c;
        display: flex;
        justify-content: center
    }

    .card-main {
        border-radius: 5px;
        display: flex;
        background-color: #374151 !important;
    }

    .accordions {
        margin-top: 10px;
        justify-content: space-between !important;
    }

    @media all and (max-width:500px) {
        .calculator tr {    display: table;  width:100%;    }
        .calculator td {    display: table-row; }
    }
</style>
