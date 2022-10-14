@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{ $projects['projectsName'] }}</div>
        </div>
    </x-slot>

    <div class="card">
        <h5 class="card-header">{{$projects['projectsName']}}</h5>
        <div class="card-body">
            <h5 class="card-title">{{$projects['projectsDesc']}}</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <div class="card">
        <h5 class="card-header">Atividades</h5>
        <div class="card-body">

        </div>
    </div>

</x-app-layout>


<style>

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
