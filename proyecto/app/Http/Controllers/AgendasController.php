<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AgendasController;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(){
        // route --> /agenda
        // fetch all records & pass into show view
     $agendas = AgendaController::orderBy('Nombre', 'desc' )->get(); 

     return view('agendas.index', ["agendas" => $agendas]);
    }

    public function show($id): void {
        // route --> /agenda/{id}
        // fetch a single record & pass into show view


    }

    public function update($id): void {
        // route --> /agenda/{id}/edit
        // fetch a single record & pass into edit view
    }

    public function delete($id): void {
        // route --> /agenda/{id}/delete
        // delete a single record & redirect to index view

        // Borraremos el registro de la agenda
    }
}
