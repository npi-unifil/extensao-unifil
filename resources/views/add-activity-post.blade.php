@extends('layout')

@section('cabecalho')
@endsection()

@section('conteudo')
    <div class="container mt-4">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                Cadastro de atividades
            </div>
            <div class="card-body form-floating mb-3">
                <form name="add-blog-post-form" class="row g-3 formulario" id="add-blog-post-form" method="post"
                    action="{{ url('store-form') }}">
                    @csrf
                    <div class="form-floating mb-3 d-flex flex">
                        <input id="floatingInput" name="title" placeholder="Tituto de atividade"
                            class="form-control floatingInput" type="text" required="">
                        <label class="label" for="floatingInput">Titulo de atividade</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea rows="10" style="height: 100px" id="floatingTextarea2" name="description" placeholder="Descrição"
                            class="form-control floatingInput" required=""></textarea>
                        <label for="floatingTextarea">Descrição</label>
                    </div>

                    <div class="form-group form-floating">
                        <input id="floatingInput" name="grade" placeholder="Valor Atribuido"
                            class="form-control floatingInput" inputmode="numeric" min="0" max="100"
                            type="number" />
                        <label for="floatingInput">Nota</label>
                    </div>

                    <div class="form-group form-floating">
                        <input id="floatingInput today" name="date" placeholder="dd/mm/aaaa"
                            class="form-control floatingInput" type="date" min="{{ date('Y-m-d') }}">
                        <label for="floatingInput">Data de Entrega</label>
                    </div>
                    <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                        <a href="list" type="button" class="btn btn-danger  align-items-center">Cancelar</a>
                        <button href="list" type="submit" class="btn button col-md-1">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection()

<style>
    .button {
        background-color: #fb923c !important;
        color: #ffff !important;
    }

    .card {
        background-color: #64748b !important;
    }

    .card-header {
        background-color: #fb923c !important;
        color: #ffff !important;
    }

    .label {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .form-control {
        background-color: #dddd;
    }

</style>
