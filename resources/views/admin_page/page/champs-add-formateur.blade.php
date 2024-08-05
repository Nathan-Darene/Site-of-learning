<div class="containers">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('add.formateur')}}" method="POST">
        @csrf
        <div class="form-group">
            {{-- <i class="fas fa-user icons"></i> --}}
            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom du formateur" required
                value="{{ old('nom') }}">
        </div>

        <div class="form-group">
            {{-- <i class="fas fa-user icons"></i> --}}
            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Prénom" required
                value="{{ old('prenom') }}">
        </div>

        <div class="form-group">
            {{-- <i class="fas fa-phone icons"></i> --}}
            <input type="tel" id="telephone" name="telephone" class="form-control"
                placeholder="Numéro de téléphone du formateur" required value="{{ old('telephone') }}">
        </div>

        <div class="form-group">
            {{-- <i class="fas fa-envelope icons"></i> --}}
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required
                value="{{ old('email') }}">
        </div>

        <div class="form-group">
            {{-- <i class="fas fa-lock icons"></i> --}}
            <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control"
                placeholder="Mot de passe" required>
        </div>

        <div class="form-group">
            {{-- <i class="fas fa-book icons"></i> --}}
            <input type="text" id="Formation_dispanse" name="Formation_dispanse" class="form-control" placeholder="Formation dispensée" required
                value="{{ old('Formation_dispanse') }}">
        </div>
        <center>
            <button type="submit" class="Download-button">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                    <path
                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z"
                        fill="white">
                    </path>
                </svg>

                <span>Ajouter un formateur</span>
            </button>
        </center>
    </form>
</div>
