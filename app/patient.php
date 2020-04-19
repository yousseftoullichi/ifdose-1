<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $table = 'patients';
    protected $fillable = ['nom','prenom','clef','age','sexe','telephone','ratioPetitDej','ratioDej','ratioColl','ratioDinnez','IndiceSensibilite','archived'] ;

     public function setPasswordAttribute($password){
	 $this->attributes['clef'] = bcrypt($password);
	}

    public function dossier()
    {
        return $this->hasOne('App\Dossier');
    }
    public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }
}
