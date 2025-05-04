<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
   
    protected $filable =[
        'nom',
        'prenom',
        'sexe',
        'matiere',
        'age',
        'email'
    ];
}
