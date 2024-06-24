document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.querySelector('.burger-menu');
    const menu = document.querySelector('.menu');

    burgerMenu.addEventListener('click', function() {
        menu.classList.toggle('active');
        burgerMenu.classList.toggle('active');
    });

    // Définir les slides et l'index courant
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;

    // Fonction pour afficher la prochaine slide
    function showNextSlide() {
        slides[currentIndex].style.display = 'none'; // Masque la slide courante
        currentIndex = (currentIndex + 1) % slides.length; // Passe à la prochaine slide (boucle)
        slides[currentIndex].style.display = 'block'; // Affiche la prochaine slide
        setTimeout(showNextSlide, 6000); // Appelle la fonction pour afficher la slide suivante après 2 secondes
    }

    // Affiche la première slide
    slides[currentIndex].style.display = 'block';

    // Démarre le diaporama en appelant la fonction pour afficher la prochaine slide
    setTimeout(showNextSlide, 6000);
});
