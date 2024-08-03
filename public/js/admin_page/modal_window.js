/*Fichier js qui affiche les fenetre modale*/

/*Script pour afficher la fenetre modal pour ajouter une formateur */
document.addEventListener("DOMContentLoaded", function() {
    const formateurLink = document.getElementById("formateur-add");
    const modalFormateur = document.getElementById("add-formateur");
    const closeFormateur = modalFormateur.querySelector(".close");

    formateurLink.addEventListener("click", function() {
        modalFormateur.style.display = "block";
    });

    closeFormateur.addEventListener("click", function() {
        modalFormateur.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalFormateur) {
            modalFormateur.style.display = "none";
        }
    });
});


/*Script pour afficher la fenetre modal pour ajouter une formation */
document.addEventListener("DOMContentLoaded", function() {
    const formationLink = document.getElementById("formation-add");
    const modalFormation = document.getElementById("add-formation");
    const closeFormation = modalFormation.querySelector(".close");

    formationLink.addEventListener("click", function() {
        modalFormation.style.display = "block";
    });

    closeFormation.addEventListener("click", function() {
        modalFormation.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalFormation) {
            modalFormation.style.display = "none";
        }
    });
});

/*Script pour afficher la fenetre modal pour ajouter un utilisateur */
document.addEventListener("DOMContentLoaded", function() {
    const usersLink = document.getElementById("users-add");
    const modalUsers= document.getElementById("add-users");
    const closeUsers= modalUsers.querySelector(".close");

    usersLink.addEventListener("click", function() {
        modalUsers.style.display = "block";
    });

    closeUsers.addEventListener("click", function() {
        modalUsers.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalUsers) {
            modalUsers.style.display = "none";
        }
    });
});


/*Script pour afficher la fenetre modal de  supression d'un formateur */
document.addEventListener("DOMContentLoaded", function() {
    const delFormLink = document.getElementById("formateur-delete");
    const modalDelForm = document.getElementById("del-formateur");
    const closeDelForm = modalDelForm.querySelector(".close");

    delFormLink.addEventListener("click", function() {
        modalDelForm.style.display = "block";
    });

    closeDelForm.addEventListener("click", function() {
        modalDelForm.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalDelForm) {
            modalDelForm.style.display = "none";
        }
    });
});


/*Script pour afficher la fenetre modal de supression d'une formation */
document.addEventListener("DOMContentLoaded", function() {
    const delFormLink = document.getElementById("formation-delete");
    const modalDelForm = document.getElementById("del-formation");
    const closeDelForm = modalDelForm.querySelector(".close");

    delFormLink.addEventListener("click", function() {
        modalDelForm.style.display = "block";
    });

    closeDelForm.addEventListener("click", function() {
        modalDelForm.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalDelForm) {
            modalDelForm.style.display = "none";
        }
    });
});

/*Script pour afficher la fenetre modal de supression d'un utilisateur */
document.addEventListener("DOMContentLoaded", function() {
    const delUsersLink = document.getElementById("users-delete");
    const modalDelUsers = document.getElementById("del-users");
    const closeDelUsers = modalDelUsers.querySelector(".close");

    delUsersLink.addEventListener("click", function() {
        modalDelUsers.style.display = "block";
    });

    closeDelUsers.addEventListener("click", function() {
        modalDelUsers.style.display = "none";
    });

    window.addEventListener("click", function(event) {
        if (event.target === modalDelUsers) {
            modalDelUsers.style.display = "none";
        }
    });
});

