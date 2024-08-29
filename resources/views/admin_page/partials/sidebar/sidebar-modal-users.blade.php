<!-- Balise div pour la fenêtre modale -->
<div id="modal-users" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2 class="titre_">Liste des Utilisateurs</h2></center>
        <div id="Add-formateur-list">
            <div class="main">
                @include('admin_page/partials/lists-tables/liste-table-users')
            </div>
        </div>
    </div>
</div>
