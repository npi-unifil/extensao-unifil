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
        <div class="card-body form-floating mb-3">
            <form   name="add-blog-post-form"
                    class="row g-3"
                    id="add-blog-post-form"
                    method="post"
                    action="{{ route('update', $post->id) }}" >
                @csrf
                @method('PATCH')

                <div class="form-group form-floating d-flex flex">
                    <input type="text" id="title" name="title" class="form-control floatingInputGrid" value="{{$post->title}}" required="">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-group form-floating">
                    <textarea type="text" name="description" class="form-control"  required="">{{$post->description}}</textarea>
                    <label for="floatingTextArea">Description</label>
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
                    <label for="floatingInput">Valor Atribuido</label>
                </div>
                <div>
                    <div class="form-group form-floating">
                        <input type="date" name="date" class="form-control"  value="{{$post->date}}" required=""></input>
                        <label for="floatingInput">Date</label>
                    </div>
                </div>
                <button  href="list" type="submit" class="btn btn-primary  align-items-center">Enviar</button>
                <a href={{url('/list')}} type="button" class="btn btn-danger  align-items-center">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection()
