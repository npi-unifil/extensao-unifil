@extends('layout')

@section('cabecalho')

@endsection()

@section('conteudo')
<div class="container mt-4">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Cadastro de atividades.
        </div>
        <div class="card-body form-floating mb-3">
            <form name="add-blog-post-form" class="row g-3" id="add-blog-post-form" method="post" action="{{url('store-form')}}" >
                @csrf
                <div class="form-group form-floating d-flex flex">
                    <input type="text" id="title floatingInputGrid" name="title" class="form-control floatingInput" required="">
                    <label for="floatingInput">Titulo de atividade</label>
                </div>
                <div class="form-group form-floating">
                    <textarea name="description" class="form-control" required=""></textarea>
                    <label for="floatingTextarea">Descrição</label>
                </div>
                <div class="form-group form-floating">
                    <input type="number"
                    name="grade"
                    inputmode="numeric"
                    min="0"
                    max="100"
                    class="form-control"
                    />
                    <label for="floatingInput">Valor Atribuido</label>
                </div>

                    <div class="form-group form-floating">
                        <input type="date" name="date" class="form-control" required=""></input>
                        <label for="floatingInput">Date</label>
                    </div>

                    {{--<div class="form-group form-floating">
                        <input name="file" type="file" class="form-control" id="inputGroupFile01" required="">
                    </div>
                    --}}

                <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                    <a href="list" type="button" class="btn btn-danger  align-items-center">Cancelar</a>
                    <button  href="list" type="submit" class="btn btn-primary col-md-1">Enviar</button>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection()
