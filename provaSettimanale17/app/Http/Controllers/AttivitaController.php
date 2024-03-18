<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StoreAttivitaRequest $request)
    {
      
       return view('creaAttivita',["progetto_id"=>$request->progetto_id]) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttivitaRequest $request)
    {
       $nuovaAttivita =  $request->only(['nome','descrizione','progetto_id','dataInizio','dataFine']);
       $nuovaAttivita['completato']=false;
       Attivita::create($nuovaAttivita);
        return redirect('progetti/'.$request->progetto_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivitum)
    {
        //return $attivitum->load('progetto');
        return view('infoAttività',['attivita'=>$attivitum]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivitum)
    {
        return view('modificaAttivita',['attivita'=>$attivitum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivitum)
    {
        $attivitum->nome = $request->nome ;
        $attivitum->descrizione=  $request->descrizione;
        $attivitum-> dataInizio = $request-> dataInizio;
        $attivitum->dataFine =  $request->dataFine;
        $attivitum->completato =  $request->completato;
        $attivitum->update();
        return redirect('/progetti/'.$request->progetto_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivitum)
    {
        $attivitum->delete();
        return redirect('/progetti/'. $attivitum->progetto_id);
    }
}
