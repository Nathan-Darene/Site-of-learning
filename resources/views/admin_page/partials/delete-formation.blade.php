<!-- Balise div pour la fenêtre modale de supression d'un formatuer -->
<div id="del-formation" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <center>
            <h2 class="h2">Suprimer une formation</h2>
        </center>
        <div id="delete-user-list">
            <div class="delete-user-lists">
                @include('admin_page/page/champs-delete-formation')
            </div>
        </div>
    </div>
</div>
