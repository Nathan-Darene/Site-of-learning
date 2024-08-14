<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\users;
use App\Models\formateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AddController extends Controller
{

    // Ajout d'une formation
    public function store(Request $request)
    {

        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'seance' => 'required|integer',
            'duree' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'facture' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'id_formateur' => 'required|exists:formateurs,id'
        ]);

        // Enregistrement des données
        Cours::create($validatedData);

        // Redirection
        return redirect()->back()->with('success', 'Formation ajoutée avec succès!');
    }

    //Ajout d'un formateur
    public function addformateur(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:formateurs,email',
            'mot_de_passe' => 'required|string|min:8',
            'formation_disponse' => 'required|string|max:255',
        ]);

        // Hachage du mot de passe
        $validatedData['mot_de_passe'] = Hash::make($validatedData['mot_de_passe']);

        // Enregistrement des données
        formateurs::create($validatedData);

        // Redirection
        return redirect()->back()->with('success', 'Formateur ajouté avec succès!');
    }

    //Ajout d'un utilisateur
    public function adduser(Request $request){
        // Validation des données
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users,email',
            'id_formation' => 'required|string|max:255',
            'mot_de_passe' => 'required|string|min:6',
        ]);

         // Ajouter la valeur de la case à cocher
        // $validatedData['solder'] = $request->has('checkbox') ? 1 : 0;

        // Hachage du mot de passe
        $validatedData['mot_de_passe'] = Hash::make($validatedData['mot_de_passe']);

        // Enregistrement des données
        users::create($validatedData);

        // Redirection
        return redirect()->back()->with('success', 'Utilisateur ajouté avec succès!');
    }

    




}
