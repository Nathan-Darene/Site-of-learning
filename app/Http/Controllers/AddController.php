<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\formateurs;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function create()
{
    // Récupérer les données nécessaires pour la vue, si nécessaire
    $formateurs = formateurs::all();

    // Retourner la vue de création avec les données nécessaires
    return view('admin_page.page.champs-add-formation', compact('formateurs'));
}


    public function store(Request $request)
    {

        // Validation des données
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'seance' => 'required|integer',
            'duree' => 'required|string|max:255',
            'lieu' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'id_formateur' => 'required|exists:formateurs,id'
        ]);

        // Enregistrement des données
        courses::create($validatedData);

        // Redirection ou autre action
        return redirect()->back()->with('success', 'Formation ajoutée avec succès!');
    }
}
