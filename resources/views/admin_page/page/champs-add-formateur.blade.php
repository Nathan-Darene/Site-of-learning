<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('formateurs.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom du formateur" required value="{{ old('nom') }}">
        </div>

        <div class="form-group">
            <input type="text" id="prenom" name="prenom" class="form-control" placeholder="prenom" required value="{{ old('prenom') }}">
        </div>

        <div class="form-group">
            <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="Numero de telephone du formateur" required value="{{ old('telephone') }}">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="mot_de_passe">Mot de passe:</label>
            <input type="password" id="mot_de_passe" name="mot_de_passe" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>
