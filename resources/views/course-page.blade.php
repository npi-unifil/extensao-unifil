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
        <table class="table tablereal table-sm table-dark" style="width: 100%; ">





            <thead  >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student )
                <tr>
                    <th scope="row">{{$student['studentsId']}}</th>
                    <td>{{ $student['studentName'] }}</</td>
                    <td>{{$student['studentEmail']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



    <div class="container mt-5">
        <button type="button" class="btn btn-primary centralizar" data-bs-toggle="modal" data-bs-target="#myModal">Cadastrar Aluno</button>
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
                                <input type="text" class="form-control" name="studentName" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email Institucional</label>
                                <input type="email" class="form-control" name="studentEmail">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Matricula do Aluno</label>
                                <input type="text" name="studentId" class="form-control">
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

.tabela {
    display:flex;
    justify-content: center;
    width: 50%;
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
