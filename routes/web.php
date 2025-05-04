<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\CoursController;

Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('listEtudiant');// liste etudiant

Route::get('/inscription', [EtudiantController::class, 'index'])->name('inscriptions'); // affiche form
Route::post('/create', [EtudiantController::class, 'create'])->name('create'); // route pour la creation etudiant

Route::get('/show/{id}', [EtudiantController::class, 'edit'])->name('swhoUpdate'); // route pour affiche la modification
//Route::put('/update/{id}', [EtudiantController::class, 'update'])->name('etudiant.update'); // route pour la modification

//Route::get('/show/{id}', [EtudiantController::class, 'edit'])->name('etudiant.showUpdate'); // Afficher le formulaire
Route::put('/update/{id}', [EtudiantController::class, 'update'])->name('etudiant.update'); // Enregistrer la modification

Route::delete('/etudiant/{id}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy'); // route pour la suppression

// route pour le proffesseurs
Route::get('/insertProf', [ProfesseurController::class, 'index'])->name('insertProf'); 
Route::post('/create', [ProfesseurController::class, 'create'])->name('create');
Route::get('/professeur', [ProfesseurController::class, 'listProf'])->name('listProf');

Route::get('/showp/{id}', [ProfesseurController::class, 'edit'])->name('swhoUpdateprof'); 
Route::delete('/professeur/{id}', [ProfesseurController::class, 'destroy'])->name('professeur.destroy');

Route::put('/update/{id}', [ProfesseurController::class, 'update'])->name('professeur.update');

// gestion des cours 


Route::get('/cours', [CoursController::class, 'index'])->name('cours'); // affiche form
Route::post('/create', [CoursController::class, 'create'])->name('create'); // route pour la creation etudiant
Route::get('/coursAfiche', [CoursController::class, 'listCours'])->name('listCours'); // liste des cours

// pour update

Route::get('/show/{id}', [CoursController::class, 'edit'])->name('swhoUpdatecour'); // route pour affiche la modification
//Route::put('/update/{id}', [EtudiantController::class, 'update'])->name('etudiant.update'); // route pour la modification

//Route::get('/show/{id}', [EtudiantController::class, 'edit'])->name('etudiant.showUpdate'); // Afficher le formulaire
Route::put('/update/{id}', [CoursController::class, 'update'])->name('cours.update'); // Enregistrer la modification


Route::delete('/cours/{id}', [CoursController::class, 'destroy'])->name('cours.destroy');