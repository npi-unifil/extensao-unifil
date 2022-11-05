@extends('layout')

@section('cabecalho')

@endsection()

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Cursos</div>
        </div>



        {{-- <div class=" body-card card-body">
        @foreach ($courses as $course)

        <div class="list-group list-custom">
        <a class="list-group-item" href="{{route('courseid', $course->id)}}">{{$course['courseName']}}</a>

        <div class="list-group list-custom">

        <form action="/coursePage/{{ $course->id }}" method="POST"
            onsubmit="return confirm('Tem certeza que deseja remover {{ $course->nome }} ?')">
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


        @endforeach --}}
    </x-slot>

    @section('conteudo')

    <div class="tabela" style="width: 100%;">
    <table class="table table-dark" style="width: 80%">
        <thead>
        <tr>
            <th scope="col">Cursos</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
        <tr>
            {{-- <div class=" body-card card-body"> --}}
            <div class="list-group list-custom">
                <td>
                    <a class="list-group-item" href="{{route('courseId', $course->id)}}">{{$course['courseName']}}</a>
                </td>
                <td>

                    <div class="modal" id="delete-students">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header modal-cabeca">
                                    <h5 class="modal-title">Apagar Estudante</h5>
                                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
                                </div>
                                <div class="modal-body">
                                    <b style="display:flex; justify-content:center;">Deseja Realmente remover o aluno ?</b>
                                    <form action="/coursePage/{{ $course->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        </div>
                                        <div class="modal-footer botoes-acao">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn centralizar">Excluir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    <form action="/coursePage/{{ $course->id }}" method="POST"
                        onsubmit="return confirm('Não será possivel remover o curso, se existir alunos nele, tem certeza que deseja remover {{ $course->courseName }} ? ')">
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
                </td>
            </div>
        </div>
    </tr>
        </tbody>
    @endforeach
    </table>
</div>

    <div class="newCourse">
        <a type="button" class="button btn " href='courseForm'>Criar novo curso</a>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</x-app-layout>


<style>

.body-card {
    justify-content: center;
    width: 100%;
}

.button{
    align-content: center;
    background-color: #fb923c !important;
    color: #ffff !important;
    display:flex;
    justify-content: center;
    opacity: 1;
    width:50%;
}

.button-links{
    display:flex;
    height: 100%;
    justify-content: center;
    margin-top:4px;
    width:100%;
}

.card-main {
    background-color: #374151 !important;
    border-radius: 5px;
    display: flex;
}

.header-card{
    background-color: #fb923c;
    color: #fff;
    display: flex;
    justify-content: center;
}

.list-group {
    flex-direction: unset !important;
    justify-content: center !important;
    margin-bottom: 5px !important;
}

.list-group-item:hover {
    opacity:1;
}

.list-group-item{
    background-color: #fb923c !important;
    color: #fff !important;
    display: flex !important;
    justify-content: center;
    opacity:0.9;
    width: 50% !important;
}

.newCourse{
    display:flex;
    height: 100%;
    justify-content: center;
    margin-top:4px;
    width:100%;
}

.space{
    display:flex;
    justify-content: space-between;
    margin-top: 3px;
    text-decoration-color: #374151;
}

.tabela {
    display:flex;
    justify-content: center;
}

</style>
