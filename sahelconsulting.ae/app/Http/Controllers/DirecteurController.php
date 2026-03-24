<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directeur;
use Validator;
use DB;

class DirecteurController extends Controller
{
    public function index()
    {
        $directeurs = Directeur::get();
        return view('directeurs/index', compact('directeurs'));
    }

    public function create()
    {
        return view('directeurs/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('directeurs.create')->withErrors($validator)->withInput();
        }

        $directeur = new Directeur;
        $directeur->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/directeurs'), $fileName);
            $directeur->image = $fileName;
        }

        $directeur->save();

        $request->session()->flash('success', 'Le directeur a été enregistrée avec succès.');
        return redirect()->route('directeurs.index');
    }

    public function edit($id)
    {
        $directeur = Directeur::findOrFail($id);
        return view('directeurs/edit', ['directeur' => $directeur]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'description' => 'sometimes|required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('directeurs.edit', $id)->withErrors($validator)->withInput();
        }

        $directeur = Directeur::find($id);
        $directeur->titre = $request->titre;
        $directeur->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/directeurs'), $fileName);
            $directeur->image = $fileName;
        }

        $directeur->save();

        $request->session()->flash('success', 'Le directeur a été enregistrée avec succès.');
        return redirect()->route('directeurs.index');
    }

    public function destroy(Request $request, $id)
    {
        $directeur = Directeur::findOrFail($id);
        $directeur->delete();

        $request->session()->flash('success', 'Le directeur a été supprimée avec succès.');
        return redirect()->route('directeurs.index');
    }
}
