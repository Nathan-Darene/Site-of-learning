<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\formateur;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function creates()
    {
        return view('admin_page/create');
    }


    public function create()
    {
        $formateurs = Formateur::all();
        return view('admin_page/create', compact('formateurs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'duree' => 'required|integer',
            'lieu' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'id_formateur' => 'required|exists:formateurs,id',
        ]);

        courses::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }
}
