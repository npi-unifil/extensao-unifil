@extends('layout')

@section('cabecalho')
@endsection()

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Página de Projetos</div>
        </div>
    </x-slot>
@foreach($projects as $project)
    <div class="list-group list-custom projects-cards">
        <div class="projects-div">
        <a class="list-group-item projects" href="{{route('getProjects', $project->id)}}">{{$project['projectsName']}}</a>
        </div>
    </div>
            @endforeach
</x-app-layout>

<style>
    .header-card {
    color: #ffff;
    background-color: #fb923c;
    display: flex;
    justify-content: center
}

    .projects-cards{
        width: 100%;
        display:flex;
    }

    .projects-div {
        display: flex;
        justify-content: center;
        margin: 5px;
    }

    .projects {
        color: #FFFF !important;
        background-color: #fb923c !important;
        display:flex !important;
        justify-content: center !important;
        width: 50%;
    }

/* .list-group {
    flex-direction: unset !important;
    justify-content: center !important;
    margin-bottom: 5px !important;
} */
</style>
