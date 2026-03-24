<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apropos;
use App\Models\Directeur;
use App\Models\Equipe;
use Validator;

class AproposController extends Controller
{
    public function index()
    {
        $apropos = Apropos::get();
        $directeurs = Directeur::oldest('created_at')->take(1)->get();
        $equipes = Equipe::oldest('created_at')->take(6)->get();
        return view('apropos.index', compact('apropos', 'directeurs', 'equipes'));
    }

    public function home()
    {
        $apropos = Apropos::get();
        return view('apropos.home', compact('apropos'));
    }

    public function create()
    {
        return view('apropos.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'histoire' => 'required',
            'expertise' => 'required',
            'vision' => 'required',
            'approche' => 'required',
            'imageh' =>  'nullable|image',
            'imagee' =>  'nullable|image',
            'imagev' =>  'nullable|image',
            'imagea' =>  'nullable|image'
        ]);

        if ($validator->fails()) {
            return redirect()->route('apropos.create')->withErrors($validator)->withInput();
        }

        $apropo = new Apropos;
        $apropo->histoire = $request->histoire;
        $apropo->expertise = $request->expertise;
        $apropo->vision = $request->vision;
        $apropo->approche = $request->approche;

        if ($request->hasFile('imageh')) {
            $imageh = $request->file('imageh');
            $newFileName = time() . '.' . $imageh->getClientOriginalExtension();
            $imageh->move(public_path('images/apropos'), $newFileName);
            $apropo->imageh = $newFileName;
        }

        if ($request->hasFile('imagee')) {
            $imagee = $request->file('imagee');
            $newFileName = time() . '.' . $imagee->getClientOriginalExtension();
            $imagee->move(public_path('images/apropos'), $newFileName);
            $apropo->imagee = $newFileName;
        }

        if ($request->hasFile('imagev')) {
            $imagev = $request->file('imagev');
            $newFileName = time() . '.' . $imagev->getClientOriginalExtension();
            $imagev->move(public_path('images/apropos'), $newFileName);
            $apropo->imagev = $newFileName;
        }

        if ($request->hasFile('imagea')) {
            $imagea = $request->file('imagea');
            $newFileName = time() . '.' . $imagea->getClientOriginalExtension();
            $imagea->move(public_path('images/apropos'), $newFileName);
            $apropo->imagea = $newFileName;
        }
        $apropo->save();

        $request->session()->flash('success', 'Les données ont été enregistrées avec succès.');
        return redirect()->route('about.home');
    }

    public function edit($id)
    {
        $apropo = Apropos::find($id);
        return view('apropos.edit', compact('apropo'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'histoire' => 'required',
            'expertise' => 'required',
            'vision' => 'required',
            'approche' => 'required',
            'imageh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagee' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagev' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imagea' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('apropos.edit', $id)->withErrors($validator)->withInput();
        }

        $apropo = Apropos::find($id);
        $apropo->histoire = $request->histoire;
        $apropo->expertise = $request->expertise;
        $apropo->vision = $request->vision;
        $apropo->approche = $request->approche;


        if ($request->hasFile('imageh')) {
            $imageh = $request->file('imageh');
            $newFileName = time() . '.' . $imageh->getClientOriginalExtension();
            $imageh->move(public_path('images/apropos'), $newFileName);
            $apropo->imageh = $newFileName;
        }

        if ($request->hasFile('imagee')) {
            $imagee = $request->file('imagee');
            $newFileName = time() . '.' . $imagee->getClientOriginalExtension();
            $imagee->move(public_path('images/apropos'), $newFileName);
            $apropo->imagee = $newFileName;
        }

        if ($request->hasFile('imagev')) {
            $imagev = $request->file('imagev');
            $newFileName = time() . '.' . $imagev->getClientOriginalExtension();
            $imagev->move(public_path('images/apropos'), $newFileName);
            $apropo->imagev = $newFileName;
        }

        if ($request->hasFile('imagea')) {
            $imagea = $request->file('imagea');
            $newFileName = time() . '.' . $imagea->getClientOriginalExtension();
            $imagea->move(public_path('images/apropos'), $newFileName);
            $apropo->imagea = $newFileName;
        }



        $apropo->save();

        $request->session()->flash('success', 'Les données ont été mises à jour avec succès.');
        return redirect()->route('about.home');
    }

    public function destroy(Request $request, $id)
    {
        $apropo = Apropos::findOrFail($id);
        $apropo->delete();

        $request->session()->flash('success', 'Le apropos a été supprimé avec succès.');
        return redirect()->route('about.home');
    }

}
