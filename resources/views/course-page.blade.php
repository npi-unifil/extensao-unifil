@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{ $course['courseName'] }}</div>

        </div>
    </x-slot>

    {{-- Lista de Alunos matriculados no Curso X --}}
    {{--@foreach ($students as $student)--}}
    <div class="tablediv">
        <div class="tabela">
        <table class="table tablereal table-sm table-light" style="width: 100%; ">
            <thead class="tabela-header">
                <tr>
                    <th scope="col">Matricula</th>
                    <th scope="col">@sortablelink('studentName', 'Nome Completo')</th>
                    <th scope="col">Email</th>
                    <th scope="col">Equipe</th>
                    <th scope="col" style="display:flex; justify-content:center;">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )

                <tr>
                    <td scope="row">{{$student['matricula']}}</td>
                    <td scope="row">{{$student['studentName'] }}</td>
                    <td scope="row">{{$student['studentEmail']}}</td>
                    <td scope="row">{{$student->project->projectsName}}</td>
                    <td scope="row">
                        <div class="flex d-flex gap-2" style="justify-content: center;">

                            {{-- <div class="container action">
                                <a href="/coursePage/studentEdit/{{$student->id}}">
                                <button type="button"  class="btn  centralizar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                                </button>
                            </div> --}}


                            {{-- Botão de Editar Cadastro de Alunos --}}
                        <a href='/coursePage/studentEdit/{{$student->id}}'>
                            <button class="btn  centralizar edit-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor"
                                    class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </button>
                        </a>

                        {{-- Botão de Modal de Exlusão novo --}}
                        {{-- <div class="container action"> --}}
                            <button type="button" class="btn excluir" data-bs-toggle="modal" data-bs-target="#delete-students">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor"
                                    class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                            <div class="modal" id="delete-students">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header modal-cabeca">
                                            <h5 class="modal-title">Apagar Estudante</h5>
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal"></button> --}}
                                        </div>
                                        <div class="modal-body">
                                            <b style="display:flex; justify-content:center;">Deseja Realmente remover o aluno ?</b>
                                            <form action="/studentDelete/{{ $student->id }}" method="POST">
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
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


                        {{-- Botão antigo --}}
{{--
                        <form action="/coursePage/{{ $student->id }}" method="POST"
                            onsubmit="return confirm('Tem certeza que deseja remover {{$student['studentName']}} ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class='btn btn-danger'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor"
                                    class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div></td> --}}


    <div class="container">
        <button type="button" class="btn  centralizar" data-bs-toggle="modal" data-bs-target="#myModal">Cadastrar Aluno</button>
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cadastro de Estudantes</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{route('storeStudents', $course->id)}}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" name="studentName" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email Institucional</label>
                                <input type="email" class="form-control" name="studentEmail" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Matricula do Aluno</label>
                                <input type="number" name="studentId" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="form-label">Ingressar Aluno a Equipe</label>
                                <div class=" mb-3">
                                <select
                                    class="form-select form-control"
                                    aria-label="select example"
                                    name='studentTeam'required>
                                        @foreach($projects as $project)
                                        <option value="{{$project['id']}}">{{$project['projectsName']}}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</x-app-layout>


<style>

    .action {
    justify-content: space-around;

    }

    .botoes-acao {
        display:flex;
        justify-content: center !important;
    }

    .centralizar {
        background-color: #fb923c !important;
        color: #ffff !important;
    }


    .container {
        display: flex;
        justify-content: center;
        justify-content: space-around;
    }
    .excluir {
        background-color: red !important;
        color: #FFFF !important;
    }

.header-card {
        color: #ffff;
        background-color: #fb923c;
        display: flex;
        justify-content: center
    }

    .modal-cabeca {
        justify-content: center !important;
    }


.modal-header {
            background: #F7941E;
            color: #fff;
        }

.tabela {
    display:flex;
    justify-content: center;
    width: 80%;
}

.tabela-header{
    border-radius: 10px;
}

.table {
    margin: 0 auto;
}

.tablediv {
    display:flex;
    justify-content: center;
    width: 100%;
}

</style>
