<?php

namespace App\Http\Controllers;

use App\Models\cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cours'); // affiche le 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validationDat = $request->validate([
            'nom_prof'=>'required|string|max:255',
            'nom_cours'=>'required|string|max:255',
            'nombre_heur'=>'required|string|max:255',
            'filiere'=>'required|string|max:255'
        ]);

        $cours = new cours();

        $cours->nom_prof= $validationDat['nom_prof'];
        $cours->nom_cours= $validationDat['nom_cours'];
        $cours->nombre_heur= $validationDat['nombre_heur'];
        $cours->filiere= $validationDat['filiere'];

        if($cours -> save()){
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

    public function listCours(Request $request)
    {
        $cours=cours::All();
        return view('listCours', compact('cours'));
    }

    /**
     * Display the specified resource.
     */
    public function show(cours $cours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cours = cours::find($id);
        return view('modifierCours', compact('cours'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cours = cours::findOrfail($id);

        $validationDat = $request->validate([
            'nom_prof'=>'required|string|max:255',
            'nom_cours'=>'required|string|max:255',
            'nombre_heur'=>'required|string|max:255',
            'filiere'=>'required|string|max:255'

        ]);

        

        $cours->nom_prof= $validationDat['nom_prof'];
        $cours->nom_cours= $validationDat['nom_cours'];
        $cours->nombre_heur= $validationDat['nombre_heur'];
        $cours->filiere= $validationDat['filiere'];
        $cours->save();
        //return redirect()->route('listEtudiant');
        return redirect()->route('listCours')->with('success', 'Étudiant mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cours = cours::findOrFail($id);
    
        if($cours->delete()) {
            return redirect()->route('listCours')->with('success', 'Étudiant supprimé avec succès !');
        } else {
            return redirect()->route('listCours')->with('error', 'Erreur lors de la suppression.');
        }
    }
}
