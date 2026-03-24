<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Projet;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::get();
        $projets = Projet::orderBy('created_at', 'desc')->paginate(6);
        return view('service/index', compact('services', 'projets'));
    }
}
