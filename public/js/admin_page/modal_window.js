/*Fichier js qui affiche les fenetre modale*/

/*Script pour afficher la fenetre modal pour ajouter une formateur */
document.addEventListener("DOMContentLoaded", function() {
    const usersLink = document.getElementById("formatuer-add");
    const modalUsers = document.getElementById("fromateur-add");
    const closeUsers = modalUsers.querySelector(".close");

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
    const usersLink = document.getElementById("formatuer-delete");
    const modalUsers = document.getElementById("formateur-del");
    const closeUsers = modalUsers.querySelector(".close");

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

