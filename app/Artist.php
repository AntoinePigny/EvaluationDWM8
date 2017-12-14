<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;
    public function country() {
        //peut etre utilisée en place de belongsTo, et sert pour une relation one2many
        return $this->hasOne('App\Country', 'id', 'country_id');
    }
    public function records() {
        //cette methode sert a associer des données dans 2 tables liees par une table intermediaire (donc par relation many2many)
        return $this->belongsToMany('App\Record');
    }

}
