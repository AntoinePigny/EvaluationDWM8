<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Record as Record;
use App\Label as Label;
use App\Artist as Artist;
use App\Genre as Genre;


class BaseController extends Controller
{
    public function index() {
        $flag = true;
        return view('home', ['flag' => $flag]);
    }

    //Methode pour recuperer et afficher tous les disques de la bdd
    public function recordsList() {
        $flag = false;
        $records = Record::all();
        return view('lists/recordsList', ['records' => $records->sortBy('name'), 'flag' => $flag]);
    }

    //Methode pour recuperer et afficher tous les artistes de la bdd
    public function artistsList() {
        $flag = false;
        $artists = Artist::all();
        return view('lists/artistsList', ['artists' => $artists->sortBy('name'), 'flag' => $flag]);
    }






    //Methode pour afficher la vue d'insertion d'un disque dans la bdd
    public function newRecord() {
        $flag = false;
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
        $genresAll = Genre::all();
        $genres = [];
        foreach ($genresAll as $value) {
            $genres[$value->id] = $value->name;
        }
        return view('/insert/newRecord', ['records' => $records, 'artists' => $artists, 'genres' => $genres, 'labels' => $labels, 'flag' => $flag]);
    }

    //Methode pour afficher la vue d'insertion d'un disque dans la bdd
    public function newArtist() {
        $flag = false;
        $artists = Artist::all();
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
        return view('/insert/newArtist', ['records' => $records, 'artists' => $artists, 'countries' => $countries, 'flag' => $flag]);
    }




}
