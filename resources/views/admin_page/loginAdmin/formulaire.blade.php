@extends('admin_page/loginAdmin/app')

@section('title', 'Formation Oarl')

@section('formulaire')
    <div class="containers">
        <div class="logo">
            {{-- <img src="images/assets/logo_oral.png" alt=""> --}}
            <span class="text-logo">
                <span class="logo-text">
                    <i class="fas fa-user-graduate"></i>
                    <p class="logo-text-1">CONNEXION ADMIN</p>
                </span>
            </span>
        </div>
        <form action="{{ route('login.admin') }}" method="POST">
            @csrf

            <div class="form-group">
                {{-- <i class="fas fa-envelope icons"></i> --}}
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required
                    value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Mot de passe"
                    required>
                @error('password')
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
