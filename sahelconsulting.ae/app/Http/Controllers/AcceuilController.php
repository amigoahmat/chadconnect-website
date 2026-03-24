<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acceuil;
use App\Models\Slider;
use App\Models\Apropos1;
use App\Models\Realisation;
use App\Models\Service;
use App\Models\Equipe;
use App\Models\Actualite;
use App\Models\Projet;
use DB;

class AcceuilController extends Controller
{
    public function index(){
        $sliders = Slider::get();
        $aproposs = Apropos1::get();
        $realisations = Realisation::get();
        $services = Service::get();
        $equipes = Equipe::get();
        $actualites =   DB::table('actualites')->select('actualites.*')->latest()->take(3)->get();
        $projets =   DB::table('projets')->select('projets.*')->latest()->take(6)->get();
        return view('acceuil', compact('sliders', 'aproposs', 'realisations', 'services', 'equipes', 'actualites', 'projets'));
    }



}
