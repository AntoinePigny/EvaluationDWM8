<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $timestamps = false;
    public function label() {
        //peut etre utilisée en place de belongsTo, et sert pour une relation one2many
        return $this->hasOne('App\Label', 'id', 'label_id');
    }
    public function genres() {
        //cette methode sert a associer des données dans 2 tables liees par une table intermediaire (donc par relation many2many)
        return $this->belongsToMany('App\Genre');
    }

    public function artists() {
    //cette methode sert a associer des données dans 2 tables liees par une table intermediaire (donc par relation many2many)
    return $this->belongsToMany('App\Artist');
}
}
