<?php

namespace App\Http\Controllers;

use App\Record;
use App\Label as Label;
use App\Artist as Artist;
use App\Genre as Genre;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function insertRecord(Request $request)
    {
        $record = new Record;
        //insérer les =/= propriétés du nouvel objet, en recuperant par leur name la valeur des inputs ($request)
        $record->name = $request->name;
        $record->label_id = $request->label;
        $record->stock = $request->stock;
        $record->save();
        //pour une table intermediaire, utiliser la methode atach APRES le save car elle necessite l'id généré par le save
        $record->artists()->attach($request->artists);
        $record->genres()->attach($request->genres);
        return redirect('/records');
    }
    public function deleteRecord(Request $request, $id)
    {
        $record = Record::find($id);
        $record->artists()->detach();
        $record->genres()->detach();
        $record->delete();
        return redirect('/records');
    }



    public function updateForm(Request $request, $id)
    {
        $flag = false;
        $record = Record::find($id);
        $labelsAll = Label::all();
        $labels = [];
        foreach ($labelsAll as $value) {
            $labels[$value->id] = $value->name;
        }
        $artistsAll = Artist::all();
        $artists = [];
        foreach ($artistsAll as $value) {
            $artists[$value->id] = $value->name;
        }
        $genresAll = Genre::all();
        $genres = [];
        foreach ($genresAll as $value) {
            $genres[$value->id] = $value->name;
        }
        return view('/update/updateRecord', ['labels' => $labels, 'artists' => $artists, 'genres' => $genres,  'record' => $record, 'flag' => $flag]);
    }




    public function updateAction(Request $request)
    {
        $record = Record::find($request->id);
        $record->name = $request->name;
        $record->stock = $request->stock;
        $record->label_id = $request->label;
        $record->save();
        $record->artists()->detach();
        $record->artists()->attach($request->artists);
        $record->genres()->detach();
        $record->genres()->attach($request->genres);
        return redirect('/records');
    }

    public function updateStock(Request $request)
    {
        $record = Record::find($request->id);
        $record->stock = $request->stock;
        $record->save();
        return redirect('/records');

    }
}
