$(document).ready(function () {
    //Menu button on click event
    $('.mobile-nav-button').on('click', function() {
      // Toggles a class on the menu button to transform the burger menu into a cross
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
      $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  
      
      // Toggles a class that slides the menu into view on the screen
      $('.mobile-menu').toggleClass('mobile-menu--open');
      return false;
    }); 
  });

// Faire en sorte de chnager la couleur de la croix quand le menu birger est ouvert


// Sélection de l'élément avec la classe .mobile-nav-button
var mobileNavButton = document.querySelector('.mobile-nav-button');

// Compteur pour suivre le nombre de clics
var clickCount = 0;

// Ajout d'un écouteur d'événement pour le clic sur le bouton
mobileNavButton.addEventListener('click', function() {
    // Sélection de tous les éléments enfants de mobileNavButton
    var children = mobileNavButton.querySelectorAll('*');

    // Parcours de tous les éléments enfants et changement de leur couleur
    children.forEach(function(child) {
        // Si le compteur est pair, changer la couleur en noir, sinon en blanc
        if (clickCount % 2 === 0) {
            child.style.background = 'black';
        } else {
            child.style.background = 'white';
        }
    });

    // Incrémentation du compteur pour le prochain clic
    clickCount++;
});






