@extends('templates.layout')
@section('title', 'Info Progetto')

@section('content')
<div>
       <div class="d-flex align-items-center">
    <h1 class="mb-1 d-inline-block h2">
        <span class="fw-bold">Nome Progetto:</span> 
        {{$progetto->nomeProgetto}}
    </h1>
    <div class="ms-auto fs-5">
        @if($progetto->completato)
            <span class="text-success mb-auto position-relative">
                Completato
                <span class="position-absolute top-0 start-100 translate-middle badge text-success">
                    <i class="bi bi-check-lg"></i>                 
                </span> 
            </span> 
        @else
            <span class="text-warning mb-auto position-relative">
                In corso
                <span class="position-absolute top-0 start-100 translate-middle badge text-warning">
                    {{$incompleteCount = $progetto->attivita->where('completato', true)->count()}}
                    / {{$progetto->attivita->count()}}                 
                </span> 
            </span> 
        @endif
    </div>
</div>

       
    
    </div>
   
    <div class="container">
        <div class="d-flex">
            <div>
            <p class="mt-2 h5">
                <span class="fw-bold">Nome cliente:</span> {{$progetto->nomeCliente}}
            </p>
            <p class="mt-2">
                <span class="fw-semibold">User:</span> <span class="text-primary">{{$progetto->user->name}}</span>
            </p>
             <p class="mt-3">
            <span class="fw-semibold">Descrizione:</span> {{$progetto->descrizione}}
        </p>

        </div>
        <div>
        <x-bottoniComponent :oggetto="$progetto" :tipo="'progetti'"/>
        </div>

        </div>
        

       
        <div>
            <h4 class="h4 my-2">Attività:</h4>
            <div class="list-group w-75 mx-5">
                @foreach($progetto->attivita as $attivita)
                    <div class="{{ $attivita->completato ? 'bg-success ' : 'bg-warning ' }} bg-opacity-25 list-group-item p-3 border" aria-current="true">
                        <div class="d-flex w-100">
                            <div>
                                <h5 class="mb-1">
                                    <span class="fw-bold manina">Nome Attività:</span> {{$attivita->nome}}
                                </h5> 
                                <p class="mb-1">
                                    <span class="fw-semibold text-truncate">Descrizione:</span> {{$attivita->descrizione}}
                                </p>
                                <p>
                                    <span class="fw-semibold">Stato:</span> {{$attivita->completato ? "Completato" : "In corso"}}
                                </p>
                            </div>
                            
                            <div class="align-self-end ms-auto"> 
                            <x-bottoniComponent :oggetto="$attivita" :tipo="'attivita'"/>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
