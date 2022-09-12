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

        <div class="list-group list-custom">
        <a class="list-group-item" href="{{route('courseid', $course->id)}}">{{$course['courseName']}}</a>

        <form action="/coursePage/{{ $course->id }}" method="POST"
            onsubmit="return confirm('Tem certeza que deseja remover {{ $course->nome }} ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class='btn btn-danger'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path
                        d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
        </form>
        </div>


        @endforeach
    </x-slot>

    @section('conteudo')


    <div class="newCourse">
        <a type="button" class="button btn " href='courseForm'>Criar novo curso</a>
    </div>
</x-app-layout>


<style>

.body-card {
    justify-content: center;
    width: 100%;
}

.button{
    align-content: center;
    background-color: #fb923c !important;
    color: #ffff !important;
    display:flex;
    justify-content: center;
    opacity: 1;
    width:50%;
}

.button-links{
    display:flex;
    height: 100%;
    justify-content: center;
    margin-top:4px;
    width:100%;
}

.card-main {
    background-color: #374151 !important;
    border-radius: 5px;
    display: flex;
}

.header-card{
    background-color: #fb923c;
    color: #fff;
    display: flex;
    justify-content: center;
}

.list-group {
    flex-direction: unset !important;
    justify-content: center !important;
    margin-bottom: 5px !important;
}

.list-group-item:hover {
    opacity:1;
}

.list-group-item{
    background-color: #fb923c !important;
    color: #fff !important;
    display: flex !important;
    justify-content: center;
    opacity:0.9;
    width: 50% !important;
}

.newCourse{
    display:flex;
    height: 100%;
    justify-content: center;
    margin-top:4px;
    width:100%;
}

.space{
    display:flex;
    justify-content: space-between;
    margin-top: 3px;
    text-decoration-color: #374151;
}

</style>
