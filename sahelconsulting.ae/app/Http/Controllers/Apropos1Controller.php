<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apropos1;
use Validator;
use DB;

class Apropos1Controller extends Controller
{
    public function index()
    {
        $aproposs = Apropos1::get();
        return view('apropos1/index', compact('aproposs'));
    }

    public function create()
    {
        return view('apropos1/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('aproposs.create')->withErrors($validator)->withInput();
        }

        $apropo = new Apropos1;
        $apropo->titre = $request->titre;
        $apropo->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/apropos1'), $fileName);
            $apropo->image = $fileName;
        }

        $apropo->save();

        $request->session()->flash('success', 'L\'équipe a été enregistrée avec succès.');
        return redirect()->route('aproposs.index');
    }

    public function edit($id)
    {
        $apropo = Apropos1::findOrFail($id);
        return view('apropos1/edit', ['apropo' => $apropo]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'sometimes|required',
            'description' => 'sometimes|required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('aproposs.edit', $id)->withErrors($validator)->withInput();
        }

        $apropo = Apropos1::find($id);
        $apropo->titre = $request->titre;
        $apropo->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/apropos1'), $fileName);
            $apropo->image = $fileName;
        }

        $apropo->save();

        $request->session()->flash('success', 'L\'équipe a été enregistrée avec succès.');
        return redirect()->route('aproposs.index');
    }

    public function destroy(Request $request, $id)
    {
        $apropo = Apropos1::findOrFail($id);
        $apropo->delete();

        $request->session()->flash('success', 'L\'équipe a été supprimée avec succès.');
        return redirect()->route('aproposs.index');
    }
}
