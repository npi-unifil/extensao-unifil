extends('layout')

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
                    name="studentName"
                    placeholder="Nome Completo"
                    class="form-control floatingInput"
                    type="text"
                    required="">
                    <label class="label" for="floatingInput">Nome Completo</label>
                </div>
                <div class="form-floating mb-3">
                    <input
                    id="floatingInput"
                    name="studentEmail"
                    placeholder="Email Estudantil"
                    class="form-control floatingInput"
                    type="text"
                    required="">
                    <label for="floatingTextarea">Email Estudantil</label>
                </div>
                </div>

                <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                    <a href="courses" type="button" class="btn btn-danger  align-items-center">Cancelar</a>
                    <button  href="listCourse" type="submit" class="btn button col-md-1">Enviar</button>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection()
