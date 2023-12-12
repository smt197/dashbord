<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{

    public function liste_etudiant()
    {
        $etudiants = Etudiant::orderBy('id')->paginate(4);
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajouter');
    }

    public function update_etudiant($id)
    {
        $etudiants=Etudiant::find($id);
        return view('etudiant.update',compact('etudiants'));
    }

    public function delete_etudiant($id)
    {
        $etudiant=Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status'. "L'utilisateur a bien ete supprimer avec succes.");
        
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'prenom' => 'required', 'string',
            'nom' => 'required', 'string',
            'email' => 'required', 'string',
        ]); 
        $etudiant = Etudiant ::find($request->id);
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->email = $request->email;
        $etudiant->update();   
        return redirect('/etudiant')->with('status'. "L'utilisateur a bien ete modifier avec succes.");
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'prenom' => ['required', 'string'],
            'nom' => ['required', 'string'],
            'email' => ['required', 'string'],
        ]);
        $etudiant = new Etudiant();
        $etudiant->prenom = $request->prenom;
        $etudiant->nom = $request->nom;
        $etudiant->email = $request->email;
        $etudiant->save();

        return redirect('/ajouter')->with('status'. "L'utilisateur a bien ete ajouter avec succes.");
    }

}
