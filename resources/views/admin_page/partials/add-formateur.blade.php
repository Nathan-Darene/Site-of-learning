<!-- Balise div pour la fenêtre modale -->
<div id="add-formateur" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2 class="titre_">Ajouter un formateur</h2></center>
        <div id="Add-formateur-list">
            <div class="Add-user-lists">
                {{-- @foreach (\App\Models\Users::inRandomOrder() /*->take(6)*/->get() as $user) --}}
                    <div class="user delete-user">
                        {{-- @if ($user->imageUpload) --}}
                            <img src="" class="image">
                        {{-- @else --}}
                            <img src="{{ asset('uploads/user.png') }}">
                        {{-- @endif --}}
                        <h2 class="h2">username</h2>
                        <p class="color">city</p>
                        <p class="color">gender</p>
                        <p class="h3">created</p>
                        <i class="fas fa-trash-can delete-icon" title="supprimer l'utilisateur"
                            data-user-id="id"></i>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</div>
