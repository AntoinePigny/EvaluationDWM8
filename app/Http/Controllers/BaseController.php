<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record as Record;
use App\Label as Label;
use App\Artist as Artist;

class BaseController extends Controller
{
    public function index() {
        return view('home');
    }

    //Methode pour recuperer et afficher tous les disques de la bdd
    public function recordsList() {
        $records = Record::all();
        return view('recordsList', ['records' => $records]);
    }

    //Methode pour afficher la vue d'insertion d'un disque dans la bdd
    public function newRecord() {
        $records = Record::all();
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
        return view('newRecord', ['records' => $records, 'artists' => $artists, 'labels' => $labels]);
    }
}
