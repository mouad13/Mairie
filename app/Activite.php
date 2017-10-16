<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public function reservations() {

    	return $this->hasMany('App\Reservation' , 'fk_activites');
    }
}
