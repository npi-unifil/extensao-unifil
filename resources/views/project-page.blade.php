@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{ $projects['projectsName'] }}</div>
        </div>
    </x-slot>

    <div class="cards">
    <div class="card-projects card">
        <h5 class="card-header">Descrição {{$projects['projectsName']}}</h5>
        <div class="card-body corpo-card">
            <h5 class="card-title">{{$projects['projectsDesc']}}</h5>
        </div>
        <h5 class='card-header' style="margin-top: 10px;">Atividades do Projeto</h5>
        <div class="card-body">
            @foreach ($posts as $post )
            <div class="card-activities card atividades">
            <a href="" class="card-title titulo-card">{{$post->title}}</a>
            {{-- {{route('activityId', $post->id)}} --}}
        </div>
            @endforeach
        </div>
            <h5 class="card-header">Alunos Relacionados</h5>
            <div class="card-body">
                @foreach ($students as $student)
                <div class="atividades">
                <h5 class="card-title">{{$student['studentName'] }}</h5>
                </div>
                @endforeach
            </div>
</div>
</x-app-layout>


<style>

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
