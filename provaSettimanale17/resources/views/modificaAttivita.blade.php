@extends('templates.layout')
@section('title', 'Modifica Attività')

@section('content')

<form method="post" action="/attivita/{{$attivita->id}}">
    @csrf
    @method('PATCH')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id=""  name="nome" value="{{$attivita->nome}}" placeholder="Nome Attivita">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descrizione</label>
    <textarea class="form-control" value="{{$attivita->descrizione}}" id="floatingTextarea2"  placeholder="Descrizione Attivita"name="descrizione" style="height: 100px">{{$attivita->descrizione}}</textarea>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Data Inizio</label>
    <input type="date" value="{{$attivita->dataInizio}}" class="form-control" id=""  name="dataInizio" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Data Fine</label>
    <input type="date" class="form-control" id=""  name="dataFine" value="{{$attivita->dataFine}}" >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Stato Attività</label>
    <select class="form-select" name="completato">
        <option value="1" {{ $attivita->completato ? 'selected' : '' }}>Completato</option>
        <option value="0" {{ !$attivita->completato ? 'selected' : '' }}>In corso</option>
    </select>
</div>

    <input type="hidden" name="progetto_id" value="{{$attivita->progetto_id}}">

  <button type="submit" class="btn btn-primary text-dark">Conferma</button>
</form>

@endsection
