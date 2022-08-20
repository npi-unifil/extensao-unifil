@extends('layout')

<x-app-layout>
    @foreach ($courses as $course)
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{$course['courseName']}}</div>
        </div>
    </x-slot>
    @endforeach
</x-app-layout>
