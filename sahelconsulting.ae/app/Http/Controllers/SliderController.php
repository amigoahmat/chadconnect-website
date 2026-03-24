<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SLider;
use Validator;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = SLider::latest()->take(5)->get();
        return view('sliders/index', compact('sliders'));
    }

    public function create()
    {
        return view('sliders/create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.create')->withErrors($validator)->withInput();
        }

        $slider = new Slider;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/sliders'), $fileName);
            $slider->image = $fileName;
        }

        $slider->save();

        $request->session()->flash('success', 'L\'équipe a été enregistrée avec succès.');
        return redirect()->route('sliders.index');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders/edit', ['slider' => $slider]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sliders.edit', $id)->withErrors($validator)->withInput();
        }

        $slider = Slider::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/sliders'), $fileName);
            $slider->image = $fileName;
        }

        $slider->save();

        $request->session()->flash('success', 'L\'équipe a été modifiée avec succès.');
        return redirect()->route('sliders.index');
    }

    public function destroy(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        $request->session()->flash('success', 'L\'équipe a été supprimée avec succès.');
        return redirect()->route('sliders.index');
    }
}
