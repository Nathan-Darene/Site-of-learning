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

    <form action="{{ route('formations.store') }}" method="POST" >
        @csrf

        <div class="form-group">
            <input type="text" id="titre" name="titre" class="form-control" placeholder="Titre de la formation"
                required>
        </div>

        <div class="form-group">
            <textarea id="description" name="description" class="form-control" placeholder="Description de la formation" required></textarea>
        </div>

        <div class="form-group">
            <input type="number" id="seance" name="seance" class="form-control"
                placeholder="Ajouter le nombre de seance de la formation" required>
        </div>

        <div class="form-group">
            <input type="text" id="duree" name="duree" class="form-control"
                placeholder="Ajouter la durée de cette formation" required>
        </div>

        <div class="form-group">
            <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu de la formation"
                required>
        </div>

        <div class="form-group">
            <center><label for="date_debut" class="date_debut">Date de début de la formation</label></center>
            <input type="date" id="date_debut" name="date_debut" class="form-control" required>
        </div>

        <div class="form-group">
            <center><label for="date_fin" class="date_fin">Date de fin de la formation</label></center>
            <input type="date" id="date_fin" name="date_fin" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_formateur" class="id_formateur">Formateur:</label>
            <select id="id_formateur" name="id_formateur" class="form-control" required>
                {{-- @if (isset($formateurs) && (is_array($formateurs) || is_object($formateurs))) --}}
                    @foreach(\App\Models\formateurs::inRandomOrder()->take(6)->get() as $formateur)
                        <option value="{{ $formateur->id }}">{{ $formateur->nom }} {{ $formateur->prenom }}</option>
                    @endforeach
                {{-- @endif --}}
            </select>
        </div>

        <center>
            <button type="submit" class="Download-button" >
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512">
                    <path
                        d="M144 480C64.5 480 0 415.5 0 336c0-62.8 40.2-116.2 96.2-135.9c-.1-2.7-.2-5.4-.2-8.1c0-88.4 71.6-160 160-160c59.3 0 111 32.2 138.7 80.2C409.9 102 428.3 96 448 96c53 0 96 43 96 96c0 12.2-2.3 23.8-6.4 34.6C596 238.4 640 290.1 640 352c0 70.7-57.3 128-128 128H144zm79-167l80 80c9.4 9.4 24.6 9.4 33.9 0l80-80c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-39 39V184c0-13.3-10.7-24-24-24s-24 10.7-24 24V318.1l-39-39c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9z"
                        fill="white"></path>
                </svg>
                <span>Ajouter la formation</span>
            </button>
        </center>
    </form>
</div>
