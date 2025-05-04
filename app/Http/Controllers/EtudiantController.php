<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inscription');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        validation : $validateData = $request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'sexe'=>'required|string|max:255',
            'filiere'=>'required|string|max:255'
        ]);

     $etudiant = new Etudiant();

     $etudiant ->nom = $validateData['nom'];
     $etudiant ->prenom = $validateData['prenom'];
     $etudiant ->sexe = $validateData['sexe'];
     $etudiant ->filiere = $validateData['filiere'];

    //  $etudiant->save();
    //  return redirect()->route(''); 
    
       if($etudiant->save()){
        // return back()->with('succes', 'enregistrement effectuer avec succes');
        return redirect()->route('listEtudiant')->with('success', 'enregistrement effectuer avec succes!');

       }else{
        return back()->with('error', 'erreurs lors de l enregistrement');
       }
    }


     
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function liste_etudiant()
    {
         $etudiant = Etudiant::All();
         return view('listEtudiant', compact('etudiant'));
    }

      //swhoUpdate
      

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) // la recuperation dans form pour le update
    {
        $etudiant = Etudiant::find($id);
        return view('modifierEtudiant', compact('etudiant'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrfail($id);

        $validationData = $request->validate([
            'nom'=>'required|string|max:255',
            'prenom'=>'required|string|max:255',
            'sexe'=>'required|string|max:255',
            'filiere'=>'required|string|max:255'

        ]);

        $etudiant->nom = $validationData['nom'];
        $etudiant->prenom = $validationData['prenom'];
        $etudiant->sexe = $validationData['sexe'];
        $etudiant->filiere = $validationData['filiere'];

        $etudiant->save();
        //return redirect()->route('listEtudiant');
        return redirect()->route('listEtudiant')->with('success', 'Étudiant mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiant = Etudiant::findOrFail($id);
    
    if($etudiant->delete()) {
        return redirect()->route('listEtudiant')->with('success', 'Étudiant supprimé avec succès !');
    } else {
        return redirect()->route('listEtudiant')->with('error', 'Erreur lors de la suppression.');
    }
    }
}
