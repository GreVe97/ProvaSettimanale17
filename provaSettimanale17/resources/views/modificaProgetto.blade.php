@extends('templates.layout')
@section('title', 'Modifica Progetto')

@section('content')

<form method="post" action="/progetti/{{$progetto->id}}">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id=""  name="nomeProgetto" value="{{$progetto->nomeProgetto}}" placeholder="Nome Attivita">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descrizione</label>
    <textarea class="form-control" value="{{$progetto->descrizione}}" id="floatingTextarea2"  placeholder="Descrizione Progetto" name="descrizione" style="height: 100px">{{$progetto->descrizione}}</textarea>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Stato Progetto</label>
    <select class="form-select" name="completato">
        <option value="1" {{ $progetto->completato ? 'selected' : '' }}>Completato</option>
        <option value="0" {{ !$progetto->completato ? 'selected' : '' }}>In corso</option>
    </select>
</div>

  <div class="mb-3">
    <label for="" class="form-label">Nome Cliente</label>
    <input type="text" class="form-control" id=""  name="nomeCliente" value="{{$progetto->nomeCliente}}" placeholder="Nome Cliente">
  </div>

  
    

  <button type="submit" class="btn btn-primary text-dark">Conferma</button>
</form>

@endsection
