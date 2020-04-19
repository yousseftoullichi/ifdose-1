<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlimentRepas extends Model
{
    
     	protected $table = "AlimentsRepas";

    public function dossier(){
    	return $this->belongsTo('App\Dossier');
    }
}
