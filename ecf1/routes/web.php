<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourController;
use App\Models\Cour;
use App\Models\Crenaux;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/accueil',function(){

    $cours=Cour::all();

    return view ('ViewCours.accueil', ['cours' =>$cours]);
});
Route::get('/cours/{id}', [CourController::class, 'show'])->name('cours.show');


Route::get('/Create_reservation',function(){

    $cours=Cour::all();
    //$cours=Cour::all();
    return view ('ViewReservations.create',['cours' =>$cours]);
});
