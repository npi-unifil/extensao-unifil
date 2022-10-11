@extends('layout')

@section('cabecalho')
@endsection()

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Página de Projetos</div>
        </div>
    </x-slot>
</x-app-layout>

<style>
    .header-card {
    color: #ffff;
    background-color: #fb923c;
    display: flex;
    justify-content: center
}
</style>
