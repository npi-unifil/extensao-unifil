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

    <div class="button-links">
        <a type="button" class="button btn" href="/project-list-page">Projetos</a>
    </div>


    <div class="cadastro de Equipe">
        {{-- Modal de Cadastro de Projeto  --}}
        <div class="container mt-5">
            <button type="button" class="btn centralizar" data-bs-toggle="modal" data-bs-target="#myModal">Cadastrar Equipes</button>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cadastro de Estudantes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{url('store-projects')}}">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nome da Equipe</label>
                                    <input type="text" class="form-control" name="projectsName" >
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Descrição do Projeto</label>
                                    <textarea class="form-control" rows="5" id="comment" name="projectsDescription"></textarea>
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
    </div>


</html>



</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<style>

.button-links{
        display:flex;
        margin-top:4px;
        justify-content: center;
    }

    .button{
        color: #ffff !important;
        background-color: #fb923c !important;
        display:flex;
        justify-content: center;
        align-content: center;
        opacity: 1;
    }


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
    background-color: #fb923c !important;
    color: #ffff !important;
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

{{--
action="{{route('storeStudents', $course->id)}}" --}}
