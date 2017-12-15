<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Record as Record;
use App\Country as Country;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function insertArtist(Request $request)
    {
        $artist = new Artist;
        //insérer les =/= propriétés du nouvel objet, en recuperant par leur name la valeur des inputs ($request)
        $artist->name = $request->name;
        $artist->country_id = $request->country;
        $artist->age = $request->age;
        $artist->save();
        //pour une table intermediaire, utiliser la methode atach APRES le save car elle necessite l'id généré par le save
        $artist->records()->attach($request->records);
        return redirect('/artists');
    }

    public function deleteArtist(Request $request, $id)
    {
        $artist = Artist::find($id);
        $artist->records()->detach();
        $artist->delete();
        return redirect('/artists');
    }

    public function updateForm(Request $request, $id)
    {
        $flag = false;
        $artist = Artist::find($id);
        $countriesAll = Country::all();
        $countries = [];
        foreach ($countriesAll as $value) {
            $countries[$value->id] = $value->label;
        }
        $recordsAll = Record::all();
        $records = [];
        foreach ($recordsAll as $value) {
            $records[$value->id] = $value->name;
        }
        return view('/update/updateArtist', ['countries' => $countries, 'artist' => $artist,  'records' => $records, 'flag' => $flag]);
    }

    public function updateAction(Request $request)
    {
        $artist = Artist::find($request->id);
        $artist->name = $request->name;
        $artist->age = $request->age;
        $artist->country_id = $request->country;
        $artist->save();
        $artist->records()->detach();
        $artist->records()->attach($request->records);
        return redirect('/artists');
    }
}
