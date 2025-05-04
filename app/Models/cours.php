<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cours extends Model
{
    protected $filable =[
       'nom_prof',
       'nom_cours',
       'nombre_heur',
       'filiere',
    ];
}
