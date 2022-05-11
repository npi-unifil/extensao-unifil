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
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" id="title" name="title" class="form-control" required="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" class="form-control" required=""></textarea>
                </div>
                <div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" name="date" class="form-control" required=""></input>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Adicionar Arquivos</label>
                    <input type="file" name="archive" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button  href="list" type="submit" class="btn btn-primary  align-items-center">Enviar</button>
                <a href="list" type="button" class="btn btn-danger  align-items-center">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection()
