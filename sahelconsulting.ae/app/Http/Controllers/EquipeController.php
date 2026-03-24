<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use Validator;
use DB;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::oldest('created_at')->take(6)->get();

        return view('equipes/index', compact('equipes'));
    }

    public function create()
    {
        return view('equipes/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'post' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->route('equipes.create')->withErrors($validator)->withInput();
        }

        $equipe = new Equipe;
        $equipe->nom = $request->nom;
        $equipe->post = $request->post;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/equipes'), $fileName);
            $equipe->image = $fileName;
        }

        $equipe->facebook = $request->input('facebook');
        $equipe->twitter = $request->input('twitter');
        $equipe->linkedin = $request->input('linkedin');

        $equipe->save();

        $request->session()->flash('success', 'L\'équipe a été enregistrée avec succès.');
        return redirect()->route('equipes.index');
    }

    public function edit($id)
    {
        $equipe = Equipe::findOrFail($id);
        return view('equipes/edit', ['equipe' => $equipe]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'sometimes|required',
            'post' => 'sometimes|required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
        ]);

        if ($validator->fails()) {
            return redirect()->route('equipes.edit', $id)->withErrors($validator)->withInput();
        }

        $equipe = Equipe::find($id);
        $equipe->nom = $request->input('nom', $equipe->nom);
        $equipe->post = $request->input('post', $equipe->post);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/equipes'), $fileName);
            $equipe->image = $fileName;
        }

        $equipe->facebook = $request->input('facebook', $equipe->facebook);
        $equipe->twitter = $request->input('twitter', $equipe->twitter);
        $equipe->linkedin = $request->input('linkedin', $equipe->linkedin);

        $equipe->save();

        $request->session()->flash('success', 'L\'équipe a été modifiée avec succès.');
        return redirect()->route('equipes.index');
    }

    public function destroy(Request $request, $id)
    {
        $equipe = Equipe::findOrFail($id);
        $equipe->delete();

        $request->session()->flash('success', 'L\'équipe a été supprimée avec succès.');
        return redirect()->route('equipes.index');
    }
}
