<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table= "Visits";
	protected $fillable=['nbr_visite','patient_id' , 'created_at'];

}
