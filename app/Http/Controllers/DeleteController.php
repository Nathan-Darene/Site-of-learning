<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\formateurs;
use App\Models\Courses;
use App\Models\Formations;
use Carbon\Carbon;

class DeleteController extends Controller
{
    public function index()
    {
        $formateurs = formateurs::all();
        dd($formateurs);
        return view('admin_page.page.champs-delete-formateur', ['formateurs' => $formateurs]);
        return view('admin_page.layouts.app', ['formateurs' => $formateurs]);
        return view('admin_page.partials.delete-formateur', ['formateurs' => $formateurs]);

    }



    // public function deleteFormateur($id)
    // {
    //     $formateur = formateurs::find($id);

    //     if ($formateur) {
    //         try {
    //             $formateur->delete();
    //             return redirect()->back()->with('success', 'Le formateur a été supprimé avec succès.');
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression du formateur.');
    //         }
    //     }

    //     return redirect()->back()->with('error', 'Le formateur n\'existe pas.');
    // }

    // public function deleteFormateurs(Request $request)
    // {
    //     // Validation des données
    //     $request->validate([
    //         'formateur_ids' => 'required|array',
    //         'formateur_ids.*' => 'integer|exists:formateurs,id',
    //     ]);

    //     $formateurIds = $request->input('formateur_ids');

    //     if (!empty($formateurIds)) {
    //         try {
    //             // Met à jour les courses pour définir id_formateur à null
    //             Courses::whereIn('id_formateur', $formateurIds)->update(['id_formateur' => null]);

    //             // Supprime les formateurs
    //             formateurs::whereIn('id', $formateurIds)->delete();

    //             return redirect()->back()->with('success', 'Les formateurs sélectionnés ont été supprimés.');
    //         } catch (\Exception $e) {
    //             return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression des formateurs.');
    //         }
    //     }

    //     return redirect()->back()->with('error', 'Veuillez sélectionner un ou plusieurs formateurs pour la suppression.');
    // }
}
