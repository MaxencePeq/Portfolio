// Charger le thème sauvegardé
if (localStorage.getItem('theme') === 'dark') document.body.classList.add('dark-mode');


const regular = "fa-regular fa-"
const darkMode = regular + "moon"
const lightMode = regular + "sun"

// Gérer le clic sur le bouton
document.getElementById('theme-toggle').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');

    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
        this.className = lightMode
    } else {
        localStorage.setItem('theme', 'light');
        this.className = darkMode
    }
});