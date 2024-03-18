@extends('templates.layout')
@section('title', 'Info Attività')

@section('content')
<div>
    <div class="d-flex align-items-center">
        <h3 class="mb-1 d-inline-block h3">
            <span class="fw-bold">Nome Attività:</span> 
            {{$attivita->nome}}
        </h3>
        <div class="ms-auto fs-5">
            @if($attivita->completato)
                <span class="text-success mb-auto position-relative">
                    Completato
                    <span class="position-absolute top-0 start-100 translate-middle badge text-success">
                        <i class="bi bi-check-lg"></i>                 
                    </span> 
                </span> 
            @else
                <span class="text-warning mb-auto position-relative">
                    In corso
                </span> 
            @endif
           
        </div>
    </div>
</div>
   
<div class="container">
    <div class="d-flex">
        <div>
         <p class="mt-3">
        <span class="fw-semibold h5">Descrizione:</span> {{$attivita->descrizione}}
    </p>
    <p class="mt-3">
        <span class="fw-semibold h5">Data Inizio:</span> {{$attivita->dataInizio}}
    </p>
    <p class="mt-3">
        <span class="fw-semibold h5">Data Fine:</span> {{$attivita->dataFine}}
    </p>

    </div>
      
    <div class="align-self-end ms-auto">    
    <x-bottoniComponent :oggetto="$attivita" :tipo="'attivita'"/>
                </div>
    </div>
    
   
    <div>
        <h4 class="h4 mt-3 mb-2">Progetto Associato:</h4>
        <div class="list-group w-75 ms-2 ">
        <x-progettoComponente :progetto="$attivita->progetto" class="border d-none" />
</div>

    </div>
</div>
@endsection
