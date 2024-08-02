document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.sidebar a');

    sidebarLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Retirer la classe active de tous les liens
            sidebarLinks.forEach(link => link.classList.remove('active'));

            // Ajouter la classe active au lien cliqué
            this.classList.add('active');
        });
    });
});
