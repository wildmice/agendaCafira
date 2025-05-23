<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/agendas', [AgendasController::class, 'agenda']);

Route::get('/agenda/create', function () {
    return view('agenda.create');
});


Route::get('/agenda/{id}', function () {
    return view('agenda.show');
});


Route::resource('events', EventController::class);