@extends('users_page.loginUser.app')

@section('title', 'Formation Oarl')

@section('formulaires')
    <div class="containers">
        <div class="logo">
            {{-- <img src="images/assets/logo_oral.png" alt=""> --}}
            <span class="text-logo">
                <span class="logo-text">
                    <p class="logo-text-1">CONNECTEZ-VOUS À VOTRE COMPTE</p>
                </span>
            </span>
        </div>
        <form action="{{ route('login.user') }}" method="POST">
            @if (Session::has('fail'))
                <div class="botton-text alert alert-danger"> {{ Session::get('fail') }}</div>
            @endif
            @csrf

            <div class="form-group">
                {{-- <i class="fas fa-envelope icons"></i> --}}
                <span class="text-danger texte">@error('email') {{$message}} @enderror</span>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required
                    value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" placeholder="Mot de passe"
                    required>
                @error('mot_de_passe')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <center class="btn-1">
                <button type="submit" class="Download-button">
                    <span class="btn">Se connecter</span>
                </button>
            </center>
        </form>
    </div>
@endsection
