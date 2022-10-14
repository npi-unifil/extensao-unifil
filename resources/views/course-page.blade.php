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
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )

                <tr>
                    <td scope="row">{{$student['matricula']}}</td>
                    <td scope="row">{{$student['studentName'] }}</td>
                    <td scope="row">{{$student['studentEmail']}}</td>
                    <td scope="row">{{$student->project->projectsName}}
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>



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
                                <input type="text" name="studentId" class="form-control" required>
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

.centralizar {
    background-color: #fb923c !important;
    color: #ffff !important;
}

.container {
    display: flex;
    justify-content: end;
}

.header-card {
        color: #ffff;
        background-color: #fb923c;
        display: flex;
        justify-content: center
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
