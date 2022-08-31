@extends('layout')

<x-app-layout>
    <x-slot name="header">
        <div class="card">
            <div class=" header-card card-body card-background">{{$course}}</div>
        </div>
    </x-slot>
</x-app-layout>
