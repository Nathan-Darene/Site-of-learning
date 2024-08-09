
document.addEventListener("DOMContentLoaded", function() {
    // Fonction pour initialiser une modal
    function setupModal(triggerId, modalId) {

        const trigger = document.getElementById(triggerId);
        const modal = document.getElementById(modalId);
        const closeBtn = modal.querySelector(".close");

        trigger.addEventListener("click", function() {
            modal.style.display = "block";
        });

        closeBtn.addEventListener("click", function() {
            modal.style.display = "none";
        });

        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    }

    // Liste des déclencheurs et des modales correspondantes
    const modals = [
        { trigger: "formateur-add", modal: "add-formateur" },
        { trigger: "formation-add", modal: "add-formation" },
        { trigger: "users-add", modal: "add-users" },
        { trigger: "formateur-delete", modal: "del-formateur" },
        { trigger: "formation-delete", modal: "del-formation" },
        { trigger: "users-delete", modal: "del-users" },

        // modal pour les sidebar
        { trigger: "analytics", modal: "modal-analytics" },
        { trigger: "users", modal: "modal-users" },
        { trigger: "formateur", modal: "modal-trainer" },
        { trigger: "history", modal: "modal-history" },
        { trigger: "sale-list", modal: "modal-sale-list" },
        { trigger: "reports", modal: "modal-reports" },
        { trigger: "settings", modal: "modal-settings" },
        // { trigger: "", modal: "" }


    ];

    // Initialiser les modales
    modals.forEach(({ trigger, modal }) => setupModal(trigger, modal));
});
