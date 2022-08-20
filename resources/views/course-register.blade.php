@extends('layout')

@section('cabecalho')

@endsection()

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Cursos</div>
        </div>
        <div class=" body-card card-body">
        @foreach ($courses as $course)

            <div class="card">
                <div class="space header-card card-body card-background">
                    <a href="coursePage">{{$course['courseName']}}</a>
                </div>
            </div>


        @endforeach
    </x-slot>

    @section('conteudo')


    <div class="newCourse">
        <a type="button" class="button btn " href='courseForm'>Criar novo curso</a>
    </div>
</x-app-layout>


<style>

    .space{
        text-decoration-color: #374151;
        margin-top: 3px;
        display:flex;
        justify-content: space-between;
    }

    .newCourse {
    width:100%;
    height: 100%;
    display:flex;
    margin-top:4px;
    justify-content: center;
}



    .header-card {
    color: #ffff;
    background-color: #fb923c;
    display: flex;
    justify-content: center;
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
