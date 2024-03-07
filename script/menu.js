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

// Faire en sorte de chnager la couleur de la croix quand le menu burger est ouvert

// Sélection de tous les éléments avec la classe .mobile-nav-button, et gerer en fonction de quel menu burger est ouvert

var body= document.querySelector('body');
var buttons = document.querySelectorAll('.mobile-nav-button');
var scrollNav = document.querySelector('.scrollNav');

// Initialisation du compteur pour suivre le nombre de clics
var clickCount = 0;

// Ajout d'un écouteur d'événements de clic à chaque bouton
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Sélection de tous les éléments avec la classe .line
        var lines = document.querySelectorAll('.mobile-nav-button__line');


        lines.forEach(function(line) {
            
            if (clickCount % 2 === 0) {
                line.style.background = 'black';
                body.style.overflowY = 'hidden';
                scrollNav.style.backgroundColor = 'transparent';
                scrollNav.style.boxShadow = 'inset 0px 0px 0px 0px rgba(0,0,0,0)';
                scrollNav.style.backdropFilter = 'none';

            } else {
                line.style.background = 'white';
                body.style.overflowY = 'visible';
                scrollNav.style.backgroundColor = 'rgba(0, 0, 0, 0.6)';  
                scrollNav.style.boxShadow = '0px 10px 5px 0px rgba(0,0,0,0.08)';
                scrollNav.style.backdropFilter = 'blur(10px)';
                
            }
        });
        

        

        // Incrémentation du compteur pour le prochain clic
        clickCount++;
        console.log(clickCount);
    });
});




//Je mets en place le menu qui apprait au scroll

window.addEventListener('scroll', function() {
    var element = document.querySelector('.scrollNav'); // Remplacez 'votre_element' par l'ID de votre élément
    var position = window.scrollY; // Position de défilement verticale

    if (position > 200) { // Si la position de défilement dépasse 200 pixels
        element.style.top = '0px'; // pour l'animation
        element.style.position = 'fixed';

    } else {
        element.style.top = '-120px'; // Cacher l'élément
        element.style.position = 'absolute';
    }
});






