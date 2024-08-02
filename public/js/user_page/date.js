
document.addEventListener('DOMContentLoaded', function() {
    // Obtenir la date actuelle
    var dateActuelle = new Date();
    // Trouver le jour de la semaine (0-6, où 0 est dimanche)
    var jourSemaine = dateActuelle.getDay();
    // Calculer la date du lundi de cette semaine
    var joursDepuisLundi = (jourSemaine === 0 ? 6 : jourSemaine - 1);
    var lundiDate = new Date(dateActuelle);
    lundiDate.setDate(dateActuelle.getDate() - joursDepuisLundi);
    // Noms abrégés des jours de la semaine en français
    var joursDeLaSemaine = ["Lun", "Mar", "Mer", "Jeu", "Ven", "Sam", "Dim"];
    // Sélectionner les éléments date dans le HTML
    var datesElements = document.querySelectorAll('.dates .item');
    // Mettre à jour les éléments avec les dates correctes
    datesElements.forEach(function(element, index) {
        // Calculer la date pour l'élément actuel
        var date = new Date(lundiDate);
        date.setDate(lundiDate.getDate() + index);
        // Obtenir le numéro du jour
        var numeroJour = date.getDate();
        // Mettre à jour le contenu des éléments
        element.querySelector('h5').textContent = joursDeLaSemaine[index];
        element.querySelector('a').textContent = numeroJour;
    });
    // Marquer le jour actuel comme actif
    var activeIndex = jourSemaine === 0 ? 6 : jourSemaine - 1;
    datesElements[activeIndex].classList.add('active');
});
