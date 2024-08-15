@extends('admin_page/loginAdmin/app')

@section('title', 'Formation Oarl')

@section('formulaire')
    <div class="containers">
        <div class="logo">
            {{-- <img src="images/assets/logo_oral.png" alt=""> --}}
            <span class="text-logo">
                <span class="logo-text-1">CONNEXION </span>
            </span>
        </div>
        <form action="{{ route('login.admin') }}" method="POST">
            @csrf

            <div class="form-group">
                {{-- <i class="fas fa-envelope icons"></i> --}}
            032<input type="email" id="email" name="email" class="form-control" placeholder="Email" required
                    value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" placeholder="Mot de passe"
                    required>
            </div>

            <center>
                <button type="submit" class="Download-button">
                    <span>Se connecter</span>
                </button>
            </center>
        </form>
    </div>
@endsection
