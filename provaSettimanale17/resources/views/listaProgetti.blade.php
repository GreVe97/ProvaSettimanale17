@extends('templates.layout')
@section('title', 'Lista Progetti')

@section('content')
<a type="button" class="btn btn-secondary text-dark d-block my-3 w-75 mx-auto" href="/progetti/create">
    <i class="bi bi-plus"></i> Nuovo Progetto
</a>

@if($progetti)
<div class="list-group w-75 mx-auto">
    @foreach($progetti as $key => $progetto)
    <x-progettoComponente :progetto="$progetto" />

    @endforeach
</div>
@endif

@endsection
