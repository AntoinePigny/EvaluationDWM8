<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record as Record;

class BaseController extends Controller
{
    public function index() {
        $records = Record::all();
        return view('home', ['records' => $records]);
    }
}
