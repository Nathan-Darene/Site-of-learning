
document.addEventListener("DOMContentLoaded", function() {
    // Sélectionner les éléments avec des classes spécifiques
    const elements = document.querySelectorAll('.icon-translate-no');
    elements.forEach(function(element) {
        element.setAttribute('translate', 'no');
    });
});
