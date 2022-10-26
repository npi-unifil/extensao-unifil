@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Atividades</div>
        </div>
    </x-slot>

    @section('conteudo')

    <div class="cards">
        <div class="card card-ac">
            <h5 class="card-header">Atividade {{$posts['title']}}</h5>
            <h5>{{$posts->description}}</h5>
        </div>
    </div>
    <div class="cards">
    <div class="card card-ac">
        <h5 class="card-header">Relatorios Entregues</h5>
    </div>
</div>

</x-app-layout>


<style>

    .cards {
        display: flex;
        justify-content: center;
        width: 100%
    }

    .card-ac {
        width: 70%;
    }

    .card-header {
        background-color:#fb923c !important;
        color: #FFF;
        display:flex;
        justify-content: center;
    }

    .header-card {
        background-color: #fb923c;
        color: #ffff;
        display: flex;
        justify-content: center
    }

</style>
