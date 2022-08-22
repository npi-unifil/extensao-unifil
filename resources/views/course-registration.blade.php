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
            Cadastro de Cursos
        </div>
        <div class="card-body form-floating mb-3">
            <form name="add-blog-post-form" class="row g-3 formulario" id="add-blog-post-form" method="post" action="{{url('store-course-form')}}" >
                @csrf
                <div class="form-floating mb-3 d-flex flex">
                    <input
                    id="floatingInput"
                    name="courseName"
                    placeholder="Tituto de atividade"
                    class="form-control floatingInput"
                    type="text"
                    required="">
                    <label class="label" for="floatingInput">Nome do curso</label>
                </div>
                <div class="form-floating mb-3">
                    <select
                    class="form-select form-control"
                    aria-label="Default select example"
                    name='courseYear'>
                        <option selected>Selecionar Período do curso</option>
                        <option value="1">1º Periodo</option>
                        <option value="2">2º Periodo</option>
                        <option value="3">3º Periodo</option>
                        <option value="4">4º Periodo</option>
                        <option value="5">5º Periodo</option>
                        <option value="6">6º Periodo</option>
                        <option value="7">7º Periodo</option>
                        <option value="8">8º Periodo</option>

                    </select>
                    <label for="floatingTextarea">Periodo atual do curso </label>
                </div>
                </div>
                    {{--<div class="form-group form-floating">
                        <input name="file" type="file" class="form-control" id="inputGroupFile01" required="">
                    </div>
                    --}}

                <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                    <a href="courses" type="button" class="btn btn-danger  align-items-center">Cancelar</a>
                    <button  href="listCourse" type="submit" class="btn button col-md-1">Enviar</button>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection()


<style>

    .button {
        color: #ffff !important;
        background-color: #fb923c;
    }

    .card {
        background-color: #64748b !important;
    }


    .card-header {
        background-color: #fb923c !important;
        color: #ffff !important;
    }

    .label {
        justify-content: center;
        display: flex;
        align-items: center;

    }
    .card {
        background-color: #ffff;
    }

    .form-control {
        background-color: #dddd;
    }
</style>
