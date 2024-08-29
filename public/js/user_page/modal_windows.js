
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

        { trigger: "", modal: "" },
        { trigger: "", modal: "" },
        { trigger: "", modal: "" }


    ];

    // Initialiser les modales
    modals.forEach(({ trigger, modal }) => setupModal(trigger, modal));
});
