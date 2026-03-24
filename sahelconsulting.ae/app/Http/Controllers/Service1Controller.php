<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Validator;
use DB;

class Service1Controller extends Controller
{
    public function index()
    {
        $services = Service::get();
        return view('services/index', compact('services'));
    }

    public function create()
    {
        return view('services/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('service.create')->withErrors($validator)->withInput();
        }

        $service = new Service;
        $service->titre = $request->titre;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/services'), $fileName);
            $service->image = $fileName;
        }

        $service->save();

        $request->session()->flash('success', 'Le service a été enregistrée avec succès.');
        return redirect()->route('service.index');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services/edit', ['service' => $service]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'sometimes|required',
            'description' => 'sometimes|required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('service.edit', $id)->withErrors($validator)->withInput();
        }

        $service = Service::find($id);
        $service->titre = $request->titre;
        $service->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/services'), $fileName);
            $service->image = $fileName;
        }

        $service->save();

        $request->session()->flash('success', 'L\'équipe a été enregistrée avec succès.');
        return redirect()->route('service.index');
    }

    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        $request->session()->flash('success', 'L\'équipe a été supprimée avec succès.');
        return redirect()->route('service.index');
    }
}
