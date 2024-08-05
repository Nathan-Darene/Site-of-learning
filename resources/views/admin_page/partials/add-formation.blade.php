<!-- Balise div pour la fenêtre modale -->
<div id="add-formation" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <center>
            <h2 class="h2">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Ajouter une formation</span>
            </h2>
        </center>
        <div id="add-formation-list">
            <div class="add-formation-list">
                @include('admin_page.page.champs-add-formation')
            </div>
        </div>
    </div>
</div>
