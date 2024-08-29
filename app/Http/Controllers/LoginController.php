<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\users;
use App\Models\admins;
use App\Models\formateurs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function showform()
    {
        return view('admin_page.loginAdmin.formulaire');
    }

    public function showformuser()
    {
        return view('users_page.loginUser.formulaire');
    }
    /*Connexion pour l'utilisateur */
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'mot_de_passe' => 'required|string',
        ]);

        $user =  users::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->mot_de_passe, $user->mot_de_passe)) {
                $request->session()->put('loginId', $user->id);
            } else {
                return back()->with('fail', 'Mots de passe incorect');
            }
        } else {
            return back()->with('fail', 'Adresse email incorrect');
        }

        /*Affiche des donnée de l'utilisateur */
        $data = array();
        $formation = null;

        if (Session::has('loginId')) {
            $user_id = Session::get('loginId');

            // Récupérer l'utilisateur connecté
            $data = users::find($user_id);

            // l'utilisateur connecté et toutes les cours faites par l'utilisateur connecté
            // $data = users::with('cours')->find($user_id);
            // $formations = $user->cours;
            $formations = users::where('id_formation', $data->id)->inRandomOrder()->take(4)->get();


        }

        return view('users_page.page.content', compact('data', 'formations'));
    }



    /*Connexion pour l'administrateur */

    public function loginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'mot_de_passe' => 'required|string',
        ]);

        $admin = admins::where('email', $request->email)->first();

        if ($admin && Hash::check($request->mot_de_passe, $admin->mot_de_passe)) {
            $request->session()->put('loginId', $admin->id);

            return redirect()->route('showadmin'); // Remplacez par la route vers votre page d'analyse
        } else {
            return back()->with('fail', $admin ? 'Mot de passe incorrect' : 'Adresse email incorrecte');
        }
    }

    // Route vers la page analytics
    public function showAnalytics()
    {
        $data = [];

        if (Session::has('loginId')) {
            $admin_id = Session::get('loginId');

            // Récupérer l'Admin connecté
            $data = admins::find($admin_id);
        }

        return view('admin_page.page.analytics', compact('data'));
    }


    // public function loginAdmin(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         return redirect()->back()->withErrors($validator)->withInput();
    //     }

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials)) {
    //         return redirect()->route('showadmin'); // Redirection directe
    //     }

    //     return redirect()->back()->with('error', 'Invalid credentials');
    // }
}
