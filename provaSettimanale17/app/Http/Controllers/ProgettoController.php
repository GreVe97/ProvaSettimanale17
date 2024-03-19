<?php

namespace App\Http\Controllers;

use App\Models\Progetto;
use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('listaProgetti',['progetti'=>Progetto::with('attivita')->with('user') ->where('user_id', '=', Auth::user()->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaProgetto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
        $nuovoProgetto = $request->only(['nomeProgetto','descrizione','nomeCliente']);
        $nuovoProgetto['completato'] = false;
        $nuovoProgetto['user_id'] = Auth::user()->id;
        $nuovoProgetto['created_at'] = Carbon::now();
       // dd($nuovoProgetto);
       Progetto::create($nuovoProgetto);
       return redirect()->action([ProgettoController::class, 'index']);

    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetti)
    {
       //return $progetti->load('attivita')->load('user')->load('attivita')->attivita;
       return view('infoProgetto',['progetto'=>$progetti->load('attivita')->load('user')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetti)
    {
        return view('modificaProgetto',['progetto'=>$progetti]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetti)
    {
        $progetti->nomeProgetto = $request->nomeProgetto ;
        $progetti->nomeCliente = $request->nomeCliente ;
        $progetti->descrizione=  $request->descrizione;
        $progetti->completato =  $request->completato;
        $progetti->update();
        return redirect('/progetti/'.$request->progetto_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetti)
    {
        $progetti->delete();
        return redirect('/progetti/'. $progetti->progetto_id);
    }
}
