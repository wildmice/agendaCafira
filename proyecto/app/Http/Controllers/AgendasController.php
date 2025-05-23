<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AgendasController;
use Illuminate\Http\Request;

class AgendasController extends Controller
{
    public function index(){
        // route --> /agenda
        // fetch all records & pass into show view
     $agendas = agendas::orderBy('Nombre', 'desc' )->get(); 

     return view('agendas.index', ["agendas" => $agendas]);
    }

    public function show($id) {
        // route --> /agenda/{id}
        // fetch a single record & pass into show view


    }
}
