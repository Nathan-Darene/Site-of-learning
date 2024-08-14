<!-- Balise div pour la fenêtre modale -->
<div id="modal-formations" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <center><h2 class="titre_">Liste des formations</h2></center>
        <div id="Add-formateur-list">
            <div class="main">
                <div class=".new-users">
                    @include('admin_page/partials/lists-tables/liste-table-formations')
                </div>
            </div>
        </div>
    </div>
</div>
