@props(['progetto'])

<div class="list-group-item p-3" aria-current="true">
        <div class="d-flex w-100 ">
            <div>
                <h5 class="mb-1">
                    <span class="fw-bold manina"> Nome Progetto:</span> 
                    {{$progetto->nomeProgetto}}
                </h5> 
                <p class="mb-1">
                    <span class="fw-semibold">Nome cliente:</span> {{$progetto->nomeCliente}}
                </p>
                <small>
                    <span class="fw-semibold ">User:</span> <span class="text-primary">{{$progetto->user->name}}</span>
                </small>
            </div>
            
            <div class="d-flex flex-column ms-auto h-100 text-end">
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
                        /
                        {{$progetto->attivita->count()}}                 
                        </span> 
                    </span> 
                @endif
                <x-bottoniComponent :oggetto="$progetto" :tipo="'progetti'"/>
            </div>
        </div>
    </div>