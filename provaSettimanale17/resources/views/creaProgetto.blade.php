@extends('templates.layout')
@section('title', 'Crea Progetto')

@section('content')

<form method="post" action="/progetti">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id=""  name="nomeProgetto" placeholder="Nome Progetto">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descrizione</label>
    <textarea class="form-control" placeholder="Descrizione Progetto" id="floatingTextarea2" name="descrizione" style="height: 100px"></textarea>
    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nome Cliente</label>
    <input type="text" class="form-control" id=""  name="nomeCliente" placeholder="Nome Cliente">
  </div>

  <button type="submit" class="btn btn-primary text-dark">Conferma</button>
</form>

@endsection
