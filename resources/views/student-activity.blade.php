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
            {{$post->title}}
        </div>

        <div class=" card-body corpo-card description">
            {{$post->description}}
        </div>
        {{-- <div class="activity-register container"> --}}


            {{-- MODAL DE ENVIO DE RELATORIO --}}
    <div class="container mt-5 atividade">

        <button type="button" class="btn centralizar" data-bs-toggle="modal" data-bs-target="#atividade">{{$post->title}}</button>
            <div class="modal" id="atividade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{$post->title}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                            <div class="modal-body">
                                <form method="post" action="{{url('store-projects')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Link</label>
                                        <input type="text" class="form-control" name="projectsName" >
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label required">Descrição do que foi Realizado</label>
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


    </div>
</div>
@endsection()


<style>

    .atividade {
        display: flex;
        justify-content: center;
    }

    .atividades {
        display:flex;
        align-content: space-around;
        justify-content: center;
        margin-bottom: 10px;
        width: 100%;
    }

    .corpo-card {
        align-self: center;
        display: grid;
        justify-content: center;
        width: 100%;
    }

    .titulo-card {
        color:#FFF;
        display: flex;
        justify-content: center;
        opacity: 0.9;
        text-decoration: none;
        width: 100%;
    }

    .titulo-card:hover{
        color:#FFF;
        opacity: 1;
    }

    .cards {
        display: flex;
        justify-content: center;
        width: 100%
    }


    .card-activities {
        background-color:#374151 !important;
        display:flex;
        justify-content: center;
        width: 100%;
    }

    .card-projects {
        width: 70%;
    }


    .card-header {
        background-color:#fb923c !important;
        color: #FFF;
        display:flex;
        justify-content: center;
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

.tabela {
    display:flex;
    justify-content: center;
    width: 80%;
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
