<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Validator;
use DB;


class ContactController extends Controller
{
    public function index(){
        return view('contacts/index');
        }



    public function home(){
        $contacts =  DB::table('contacts')->orderBy('created_at', 'desc')->get();
        return view('contacts/home', compact('contacts'));
        }



        public function store(Request $request){

            $validator = Validator::make($request->all(), [
                'nom' => 'required',
                'email' => 'required',
                'message' => 'required'
            ]);
            if($validator->passes()){
                $contact = new Contact();
                $contact->nom = $request->nom;
                $contact->email = $request->email;
                $contact->message = $request->message;


                $save = $contact->save();

                if($save){
                    $request->session()->flash('success', 'Le formulaire est enregistrer avec succes...!');
                    return redirect()->route('contact.index');
                }

            }else{
                return redirect()->route('contact.index')->withErrors($validator);
            }
        }



                            public function destroy(Request $request, $id){
                                $contact = Contact::findOrFail($id);
                                $contact->delete();

                                $request->session()->flash('success', 'La article a été supprimé avec succés...!');
                                return redirect()->route('contacts.home');
                            }
}
