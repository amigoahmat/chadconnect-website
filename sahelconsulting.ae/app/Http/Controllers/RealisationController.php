<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;
use DB;
use Validator;

class RealisationController extends Controller
{
    public function index(){

        $realisations = Realisation::get();
            return view('realisations/index', compact('realisations'));
        }

        public function create(){
            return view('realisations/create');
        }

        public function store(Request $request){


            $validator = Validator::make($request->all(), [
                'titre' => 'required',
                'nombre' => 'required'
            ]);
            if($validator->passes()){
                $realisation = new Realisation();
                $realisation->titre = $request->titre;
                $realisation->nombre = $request->nombre;
                $save = $realisation->save();

                if($save){
                    $request->session()->flash('success', 'Le realisation est enregistrer avec succes...!');
                    return redirect()->route('realisations.index');
                }

            }else{
                return redirect()->route('realisations.index')->withErrors($validator);
            }
        }



                    public function edit($id){
                                $realisation = Realisation::findOrFail($id);
                                return view('realisations/edit' , ['realisation' => $realisation]);
                            }

                            public function update(Request $request, $id){
                                $validator = Validator::make($request->all(), [
                                    'titre' => 'required',
                                    'nombre' => 'required'
                                ]);

                                if($validator->passes()){
                                    $realisation = Realisation::find($id);
                                    $realisation->titre = $request->titre;
                                    $realisation->nombre = $request->nombre;
                                    $save = $realisation->save();


                                    if($save){
                                        $request->session()->flash('success', 'Le realisation a été modifié avec succes...!');
                                        return redirect()->route('realisations.index');
                                    }

                                }else{
                                    return redirect()->route('realisations.index')->withErrors($validator);
                                }
                            }



                            public function destroy(Request $request, $id){
                                $realisation = Realisation::findOrFail($id);
                                $realisation->delete();

                                $request->session()->flash('success', 'La article a été supprimé avec succés...!');
                                return redirect()->route('realisations.index');
                            }

}
