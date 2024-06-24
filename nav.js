document.addEventListener("DOMContentLoaded", function() {
     // Sélectionne le bouton burger
     const burgerMenu = document.querySelector(".burger-menu");
     // Sélectionne le menu
     const menu = document.querySelector(".menu");

     // Ajoute un écouteur d'événements sur le clic du bouton burger
     burgerMenu.addEventListener("click", function() {
          // Ajoute ou supprime la classe "active" du menu pour afficher ou masquer le menu
          menu.classList.toggle("active");
     });

     // Sélectionne le bouton "Envoyer une demande"
     const requestButton = document.querySelector(".request-button");

     // Ajoute un écouteur d'événements sur le clic du bouton "Envoyer une demande"
     requestButton.addEventListener("click", function() {
          // Mettez ici le code pour gérer l'action lorsque le bouton "Envoyer une demande" est cliqué
     });
});
