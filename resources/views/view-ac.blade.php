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
                <h5 class="card-header">Atividade {{ $post['title'] }}</h5>
                <h5>{{ $post->description }}</h5>
            </div>
        </div>
        <div class="cards">
            <div class="card card-ac">
                <h5 class="card-header">Relatorios Entregues</h5>
                @foreach ($post->activities as $activity)
                    <div class="card card-div ">
                        <div class=" body-card card-body">

                            <div class="accordion-card  accordion-config">
                                <div class=" accordions accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-card accordion-item">

                                        <h2 class="accordion-header text-warning bg-dark" id={{ $activity->id }}>

                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target={{ '#collapse' . $activity->id }}
                                                aria-expanded="true" aria-controls={{ $activity->id }}>
                                                {{ $post->title }}
                                            </button>

                                        </h2>
                                        <div id={{ 'collapse' . $activity->id }} class="accordion-collapse collapse "
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="card text-center">
                                                    <div class="card-header">
                                                        <h5 class="card-title">{{ $activity->project->projectsName }}</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <p class="card-text">{{ $activity['activityLink'] }}</p>
                                                        <p class="card-text">{{ $activity['activityDescription'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>


    </x-app-layout>


    <style>
        .cards {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 10px;
        }

        .card-ac {
            width: 70%;
        }

        .card-div {
            background-color: darkgrey !important;
        }

        .card-header {
            background-color: #fb923c !important;
            color: #FFF;
            display: flex;
            justify-content: center;
        }

        .header-card {
            background-color: #fb923c;
            color: #ffff;
            display: flex;
            justify-content: center
        }
    </style>
