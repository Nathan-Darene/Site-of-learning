@extends('admin_page.partials.add-formation')

@section('champs-add-formation')

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

        <form action="{{ route('courses.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="duree">Durée (heures):</label>
                <input type="number" id="duree" name="duree" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="lieu">Lieu:</label>
                <input type="text" id="lieu" name="lieu" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date_debut">Date de début:</label>
                <input type="date" id="date_debut" name="date_debut" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date_fin">Date de fin:</label>
                <input type="date" id="date_fin" name="date_fin" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="id_formateur">Formateur:</label>
                <select id="id_formateur" name="id_formateur" class="form-control" required>
                    @foreach ($formateurs as $formateur)
                        <option value="{{ $formateur->id }}">{{ $formateur->nom }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
