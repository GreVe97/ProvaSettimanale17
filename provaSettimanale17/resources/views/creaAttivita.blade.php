@extends('templates.layout')
@section('title', 'Crea Attività')

@section('content')

<form method="post" action="/attivita">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id=""  name="nome" placeholder="Nome Attivita">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descrizione</label>
    <textarea class="form-control" placeholder="Descrizione Attività" id="floatingTextarea2" name="descrizione" style="height: 100px"></textarea>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Data Inizio</label>
    <input type="date" class="form-control" id=""  name="dataInizio" >
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Data Fine</label>
    <input type="date" class="form-control" id=""  name="dataFine" >
  </div>
    <input type="hidden" name="progetto_id" value="{{$progetto_id}}">

  <button type="submit" class="btn btn-primary text-dark">Conferma</button>
</form>

@endsection
