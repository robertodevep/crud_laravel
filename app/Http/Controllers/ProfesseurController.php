<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('insertProf'); // vue pour afficher le formulaire
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request) // pour l'enregistrement du formulaire
    {
       
        $validationDat = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|in:masculin,feminin,autre',
            'matiere' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:99',
            'email' => 'required|email|unique:professeurs,email|max:255',
        ]);

        $professeurs = new Professeur();

        $professeurs->nom = $validationDat['nom'];
        $professeurs->prenom = $validationDat['prenom'];
        $professeurs->sexe = $validationDat['sexe'];
        $professeurs->matiere = $validationDat['matiere'];
        $professeurs->age = $validationDat['age'];
        $professeurs->email= $validationDat['email'];

        if($professeurs -> save()){
            return back()->with("Enregistrement effectuer avec succes");

        }else{
            return back()->with("erreurs lors de l'enregistrement");
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
    public function listProf()
    {
        $professeurs = Professeur::All();
        return view('listProf', compact('professeurs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $professeurs = Professeur::find($id);
        return view('modifierProf', compact('professeurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $professeurs = Professeur::findOrfail($id);

        $validationDat = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|in:masculin,feminin,autre',
            'matiere' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:99',
            'email' => 'required|email|unique:professeurs,email|max:255',

        ]);


        $professeurs->nom = $validationDat['nom'];
        $professeurs->prenom = $validationDat['prenom'];
        $professeurs->sexe = $validationDat['sexe'];
        $professeurs->matiere = $validationDat['matiere'];
        $professeurs->age = $validationDat['age'];
        $professeurs->email= $validationDat['email'];

        $professeurs->save();
        //return redirect()->route('listEtudiant');
        return redirect()->route('listProf')->with('success', 'prof mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $professeurs = Professeur::findOrFail($id);
    
        if($professeurs->delete()) {
            return redirect()->route('listProf')->with('success', 'prof supprimé avec succès !');
        } else {
            return redirect()->route('listProf')->with('error', 'Erreur lors de la suppression.');
        }
    }
}
