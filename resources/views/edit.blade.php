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
            Editar Atividade
        </div>
        <div class="card-body card-test form-floating mb-3">
            <form   name="add-blog-post-form"
                    class="row g-3"
                    id="add-blog-post-form"
                    method="post"
                    action="{{ route('update', $post->id) }}" >
                @csrf
                @method('PATCH')

                <div class="form-group form-floating d-flex flex">
                    <input type="text" id="title" name="title" class="form-control floatingInputGrid" value="{{$post->title}}" required="">
                    <label for="floatingInput">Titulo</label>
                </div>
                <div class="form-group form-floating">
                    <textarea type="text" name="description" class="form-control"  style="height:100%"required="">{{$post->description}}</textarea>
                    <label for="floatingTextArea">Descrição</label>
                </div>
                <div class="form-group form-floating">
                    <input type="number"
                    name="grade"
                    inputmode="numeric"
                    min="0"
                    max="100"
                    class="form-control"
                    value="{{$post->grade}}"

                    />
                    <label for="floatingInput">Nota</label>
                </div>
                    <div class="form-group form-floating">
                        <input
                        type="date"
                        name="date"
                        class="form-control"
                        value="{{$post->date}}"
                        required=""
                        min="{{ date('Y-m-d') }}">
                        <label for="floatingInput">Data de Entrega</label>
                    </div>
                    <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                        <a href={{url('/list')}} type="button" class="btn btn-danger align-items-center">Cancelar</a>
                        <button  href="list" type="submit" class="btn save-button  align-items-center">Confirmar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<style>

.card {
    background-color: #64748b !important;
}

.card-body {
    background-color: #64748b !important;
}

.card-header {
    background-color: #fb923c !important;
    color: #ffff !important;
}

.form-control {
    background-color: #dddd;
}

.save-button {
    background-color: #fb923c;
    color: #ffff !important;
}
</style>
@endsection()
