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
            Editar Aluno
        </div>
        <div class="card-body card-test form-floating mb-3">
            <form   name="add-blog-post-form"
                    class="row g-3"
                    method="post"
                    action="{{ route('courseId', $student->course->id) }}" >
                @csrf
                @method('POST')

                <div class="form-group form-floating d-flex flex">
                    <input type="text" id="title" name="studentName" class="form-control floatingInputGrid" value="{{$student->studentName}}" required="">
                    <label for="floatingInput">Titulo</label>
                </div>
                <div class="form-group form-floating">
                    <textarea type="text" name="studentEmail" class="form-control"  style="height:100%"required="">{{$student->studentEmail}}</textarea>
                    <label for="floatingTextArea">Descrição</label>
                </div>
                <div class="mb-3">
                    <label class="form-label required">Matricula do Aluno</label>
                    <input type="number" name="studentId" class="form-control" value="{{$student->matricula}}" required>
                </div>

                {{-- <div class="mb-3">
                    <label for="form-label">Ingressar Aluno a Equipe</label>
                    <div class=" mb-3">
                    <select
                        class="form-select form-control"
                        aria-label="select example"
                        name='studentTeam'required value="{{$student->studentTeam}}">
                            @foreach($projects as $project)
                            <option value="{{$project['id']}}">{{$project['projectsName']}}</option>
                            @endforeach
                    </select>
                    </div>
                </div> --}}

                </div>
                    <div class="form-group form-floating justify-content-md-end d-grid gap-2 d-md-flex">
                        <a href={{route('courseId', $student->course->id)}} type="button" class="btn btn-danger align-items-center">Cancelar</a>
                        <button  href="{{route('courseId', $student->course->id)}}" type="submit" class="btn save-button  align-items-center">Confirmar</button>
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
