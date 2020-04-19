<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $table= "medecins";
	protected $fillable=['nom','prenom','telephone','adresse','ville','path'];
}
