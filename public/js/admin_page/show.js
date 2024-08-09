document.querySelectorAll('.dropdown-content a').forEach(option => {
    option.addEventListener('click', function(event) {
        event.preventDefault();
        const selectedValue = this.getAttribute('data-value');
        const selectedText = this.textContent;

        // Met à jour le bouton avec l'option sélectionnée
        document.querySelector('.dropbtn').textContent = selectedText;

        // Met à jour l'input caché avec la valeur sélectionnée
        document.getElementById('selected_option').value = selectedValue;

        document.getElementById('selected-option').textContent = `Vous avez sélectionné : ${selectedText}`;

        // Masquer le menu après sélection
        document.querySelector('.dropdown-content').style.display = 'none';
    });
});
