<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function insertOne(Request $request)
    {
        $cat = new Cat;
        //insérer les =/= propriétés du nouvel objet, en recuperant par leur name la valeur des inputs ($request)
        $cat->name = $request->name;
        $cat->gender_id = $request->gender;
        $cat->save();
        //pour une table intermediaire, utiliser la methode atach APRES le save car elle necessite l'id généré par le save
        $cat->colors()->attach($request->color);
        return redirect('/');
    }
}
