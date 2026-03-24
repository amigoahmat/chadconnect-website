<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actualite;
use Illuminate\Support\Str;
use Validator;

class ActualiteController extends Controller
{

    public function index(){
        $actualites = Actualite::orderBy('created_at', 'desc')->paginate(8);
        return view('actualites.index', compact('actualites'));
    }

    public function home(){
        $actualites = Actualite::orderBy('created_at', 'desc')->paginate(8);
        return view('actualites.home', compact('actualites'));
    }

    public function create(){
        return view('actualites.create');
    }

    public function show($slug){
        $actualite = Actualite::where('slug', $slug)->firstOrFail();
        return view('actualites.show', compact('actualite'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',

            'categorie' => 'required',
            'editeur' => 'required',
            'slug' => 'required'
        ]);

        if($validator->passes()){
            $actualite = new Actualite();
            $actualite->titre = $request->titre;
            $actualite->description = $request->description;
            $actualite->categorie = $request->categorie;
            $actualite->editeur = $request->editeur;
            $actualite->slug = Str::slug($request->input('titre'));


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newFileName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/actualites'), $newFileName);
                $actualite->image = $newFileName;
            }

            $actualite->save();

            $request->session()->flash('success', 'L\'actualite a été enregistrée avec succès.');
            return redirect()->route('actualites.index');
        } else {
            return redirect()->route('actualites.create')->withErrors($validator);
        }
    }

    public function edit($id){
        $actualite = Actualite::findOrFail($id);
        return view('actualites.edit', ['actualite' => $actualite]);
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',

            'categorie' => 'required',
            'editeur' => 'required',
            'slug' => 'required'
        ]);

        if($validator->passes()){
            $actualite = Actualite::find($id);
            $actualite->titre = $request->titre;
            $actualite->description = $request->description;
            $actualite->categorie = $request->categorie;
            $actualite->editeur = $request->editeur;
            $actualite->slug = Str::slug($request->input('titre'));

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newFileName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images/actualites'), $newFileName);
                $actualite->image = $newFileName;
            }

            $actualite->save();

            $request->session()->flash('success', 'L\'article a été mis à jour avec succès.');
            return redirect()->route('actualites.index');
        } else {
            return redirect()->route('actualites.edit', $id)->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id){
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();

        $request->session()->flash('success', 'L\'actualite a été supprimée avec succès.');
        return redirect()->route('actualites.index');
    }

}
