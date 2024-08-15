<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\users;
use App\Models\formateurs;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*Connexion pour l'utilisateur */
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'mot_de_passe' => 'required|string',
        ]);

        $user =  users::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->mot_de_passe, $user->mots_de_passe)) {
                $request->session()->put('loginId', $user->id);
            } else {
                return back()->with('fail', 'Mots de passe incorect');
            }
        } else {
            return back()->with('fail', 'Adresse email incorrect');
        }

        /*Affiche des donnée de l'utilisateur */
        $data = array();
        $reservations = array();

        if (Session::has('loginId')) {
            $user_id = Session::get('loginId');

            // Récupérer l'utilisateur connecté
            $data = users::find($user_id);

            // Récupérer toutes les réservations faites par l'utilisateur connecté
            $formation = Cours::where('user_id', $user_id)->get();
        }

        return view('users_page/page/content', compact('data', 'formation'));
    }
}
