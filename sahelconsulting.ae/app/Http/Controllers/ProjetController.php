<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use Validator;

class ProjetController extends Controller
{
    public function index()
    {
        $projets = Projet::orderBy('created_at', 'desc')->paginate(6);
        return view('projets.index', ['projets' => $projets]);
    }

    public function home()
    {

        $projets = Projet::orderBy('created_at', 'desc')->paginate(6);
        return view('projets.home', ['projets' => $projets]);
    }

    public function create()
    {
        return view('projets.create');
    }

    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show', ['projet' => $projet]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
            'image4' => 'nullable|image',
        ]);

        if ($validator->passes()) {
            $projet = new Projet();
            $projet->titre = $request->titre;
            $projet->description = $request->description;

            // Upload and save image1
            if ($request->hasFile('image1')) {
                $image1 = $request->file('image1');
                $fileName1 = time() . '_1.' . $image1->getClientOriginalExtension();
                $image1->move(public_path('images/projets'), $fileName1);
                $projet->image1 = $fileName1;
            }

            // Upload and save image2
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2');
                $fileName2 = time() . '_2.' . $image2->getClientOriginalExtension();
                $image2->move(public_path('images/projets'), $fileName2);
                $projet->image2 = $fileName2;
            }

            // Upload and save image3
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $fileName3 = time() . '_3.' . $image3->getClientOriginalExtension();
                $image3->move(public_path('images/projets'), $fileName3);
                $projet->image3 = $fileName3;
            }

            // Upload and save image4
            if ($request->hasFile('image4')) {
                $image4 = $request->file('image4');
                $fileName4 = time() . '_4.' . $image4->getClientOriginalExtension();
                $image4->move(public_path('images/projets'), $fileName4);
                $projet->image4 = $fileName4;
            }

            $projet->save();

            $request->session()->flash('success', 'Le projet a été enregistré avec succès.');
            return redirect()->route('project.home');
        } else {
            return redirect()->route('projets.create')->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $projet = Projet::findOrFail($id);
        return view('projets.edit', ['projet' => $projet]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image1' => 'nullable|image',
            'image2' => 'nullable|image',
            'image3' => 'nullable|image',
            'image4' => 'nullable|image',
        ]);

        if ($validator->passes()) {
            $projet = Projet::find($id);
            $projet->titre = $request->titre;
            $projet->description = $request->description;

            // Upload and save image1
            if ($request->hasFile('image1')) {
                $image1 = $request->file('image1');
                $fileName1 = time() . '_1.' . $image1->getClientOriginalExtension();
                $image1->move(public_path('images/projets'), $fileName1);
                $projet->image1 = $fileName1;
            }

            // Upload and save image2
            if ($request->hasFile('image2')) {
                $image2 = $request->file('image2');
                $fileName2 = time() . '_2.' . $image2->getClientOriginalExtension();
                $image2->move(public_path('images/projets'), $fileName2);
                $projet->image2 = $fileName2;
            }

            // Upload and save image3
            if ($request->hasFile('image3')) {
                $image3 = $request->file('image3');
                $fileName3 = time() . '_3.' . $image3->getClientOriginalExtension();
                $image3->move(public_path('images/projets'), $fileName3);
                $projet->image3 = $fileName3;
            }

            // Upload and save image4
            if ($request->hasFile('image4')) {
                $image4 = $request->file('image4');
                $fileName4 = time() . '_4.' . $image4->getClientOriginalExtension();
                $image4->move(public_path('images/projets'), $fileName4);
                $projet->image4 = $fileName4;
            }

            $projet->save();

            $request->session()->flash('success', 'Le projet a été mis à jour avec succès.');
            return redirect()->route('project.home');
        } else {
            return redirect()->route('projets.edit', $id)->withErrors($validator);
        }
    }

    public function destroy(Request $request, $id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();

        $request->session()->flash('success', 'Le projet a été supprimé avec succès.');
        return redirect()->route('project.home');
    }
}
