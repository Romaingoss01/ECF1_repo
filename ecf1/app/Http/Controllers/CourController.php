<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;

class CourController extends Controller
{

    public function accueil()
    {
        $cours = Cour::all();
        return view('ViewCours.accueil', compact('cours'));
    }

    public function show($id)
    {
        $cour = Cour::findOrFail($id);
        return view('ViewCours.show', ['cours'=>$cour]);
    }





}
