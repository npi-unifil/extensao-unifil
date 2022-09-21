@extends('layout')

@section('cabecalho')
@endsection()

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Estudantes</div>
        </div>
    </x-slot>

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
                        <form>
                            <div class="mb-3">
                                <label class="form-label required">Nome Completo</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Email Institucional</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Matricula do Aluno</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Curso Matriculado</label>
                                <select class="form-select form-control" aria-label="Default select example" name='courseYear'>
                                    <option selected>Selecionar curso</option>
                                    <option value="1">Analise e Desenvolvimento de Sistemas</option>
                                    <option value="2">Ciência da Computação</option>
                                    <option value="3">Engenharia de Software</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>



</x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<style>

.card-main {
    border-radius: 5px;
    display: flex;
    background-color: #374151 !important;
}

.carousel-image {
    width: 100%;
    height: 100%;
}

.carousel-item {
    width: 100%;
    height: 100%;
}

.centralizar {
    display: flex;
    justify-content: end !important;
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

        .required:after {
            content: "*";
            color: red;
        }

</style>


