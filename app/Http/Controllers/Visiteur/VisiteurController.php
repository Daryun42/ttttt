<?php

namespace App\Http\Controllers\Visiteur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Visite;
use App\Praticien;
use App\Echantillon;
use App\Medicament;
use Illuminate\Support\facades\Auth;
class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('visiteur.visites.index')->with('visites', Visite::all());
        return view('visiteur.visites.index')->with(['visites'=> Visite::all(), 'praticiens' => Praticien::all(), 'echantillons' => Echantillon::all(),'medicaments' => Medicament::all()]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idVisite)
    {
        // return view('visiteur.visites.edit')->with($idVisite);
        $visite = \App\Visite::find($idVisite);
        // $echantillon = \App\Echantillon::find($idVisite);
        
        return view('visiteur/visites/edit',compact('visite','idVisite'))->with(['medicaments'=> Medicament::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $visite = \App\Visite::find($id);
        $visite->status= $request->input('status');
        $visite->compteRendu= $request->input('compteRendu');
        $visite->save();

        $idEchantillon = $visite->idEchantillon;
        $echantillon = \App\Echantillon::find($idEchantillon);
        $echantillon->idMedicament= $request->input('medicament');
        $echantillon->quantite= $request->input('qteEchantillon');
        // $echantillon->compteRendu= $request->input('compteRendu');
        $echantillon->save();
        


        return redirect('visiteur/users');
    }
}