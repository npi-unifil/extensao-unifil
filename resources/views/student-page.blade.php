@extends('layout')

@section('cabecalho')
@endsection()

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">Estudantes</div>
        </div>
    </x-slot>

</html>



</x-app-layout>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<style>

.card-main {
    border-radius: 5px;
    display: flex;
    background-color: #374151 !important;
}

.carousel-image {
    width: 100%;
    height: 100%;
}

.carousel-item {
    width: 100%;
    height: 100%;
}

.centralizar {
    display: flex;
    justify-content: end !important;
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

        .required:after {
            content: "*";
            color: red;
        }

</style>


