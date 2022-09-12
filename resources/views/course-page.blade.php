@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{ $course['courseName'] }}</div>
        </div>
    </x-slot>

    {{-- Lista de Alunos matriculados no Curso X --}}
    <div class="tablediv">
        <div class="tabela">
        <table class="table tablereal table-sm table-dark" style="width: 100%; ">
            <thead  >
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</x-app-layout>


<style>

.tabela {
    display:flex;
    justify-content: center;
    width: 50%;
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
