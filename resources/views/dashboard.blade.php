@extends('layout')

@section('cabecalho')

@endsection()


<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Home</div>
        </div>
    </x-slot>

    <div class="button-links">
        <a type="button" class="button btn" href="list">Atividades</a>
    </div>

    <div class="button-links">
        <a type="button" class="button btn " href='/courses'>Cadastrar Curso</a>
    </div>

    <div class="button-links">
        <a type="button" class="button btn" href="students">Estudantes</a>
    </div>


</x-app-layout>

<style>
        .header-card {
        color: #ffff;
        background-color: #fb923c;
        display: flex;
        justify-content: center
    }

    .card-main {
        border-radius: 5px;
        display: flex;
        background-color: #374151 !important;
    }

    .button-links{
        width:100%;
        height: 100%;
        display:flex;
        margin-top:4px;
        justify-content: center;
    }

    .button{
        color: #ffff !important;
        background-color: #fb923c !important;
        display:flex;
        width:50%;
        justify-content: center;
        align-content: center;
        opacity: 1;
    }

</style>

