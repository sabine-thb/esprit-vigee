document.addEventListener("DOMContentLoaded", function() {
    var photosWrapper = document.querySelector('.slider-total');
  
    var sliderGlobalContainer =  document.querySelector('.slider-visible');
  
    var allReelPhotosArray = document.querySelectorAll('.reel'); // récupération des 3 SLIDES REELLES, NON CLONNEÉES
  
    var mouvement = 1; // au début nous sommes déjà sur le mouvement 1 puisque le mouvement 0 représente maintenant notre clone en début de slider
    var minMouvement = 0;
    var maxMouvement = allReelPhotosArray.length + 1; 


  
    function decaleGauche () {
      mouvement = mouvement + 1;
      if (mouvement == maxMouvement) {
        retourDebut();
      } else { 
        photosWrapper.style.left = mouvement * -100  + "%";
        photosWrapper.style.transition = 'left 0.6s ease-out '; 
        
      }

      console.log('decaleGauche');
    }

    function decaleDroite () {

      mouvement = mouvement - 1;

      if (mouvement == minMouvement) { 
        retourFin();
      } else { // sinon je peux déplacer le slider normalement
        photosWrapper.style.left = mouvement * -100  + "%";
        photosWrapper.style.transition = 'left 0.6s ease-out ';      
        
      }
      console.log('decaleDroite');
    }
    

    function retourDebut () {
    
      mouvement = minMouvement; 
      photosWrapper.style.transition = '0s'; 
      photosWrapper.style.left = "0%"; 

      setTimeout( function () {
        mouvement = minMouvement + 1; 
        photosWrapper.style.transition = 'left 0.6s ease-out'; 
        photosWrapper.style.left = mouvement * -100  + "%"; 
      }, 20)

      console.log('retourDebut');
  

    }
  
  
    function retourFin () {
      
      mouvement = maxMouvement;
      photosWrapper.style.transition = '0s';
      photosWrapper.style.left = mouvement * -100  + "%";
  
      setTimeout( function () {
        mouvement = maxMouvement - 1;
        photosWrapper.style.transition = 'left 0.6s ease-out';
        photosWrapper.style.left = mouvement * -100  + "%";
      }, 20)

      console.log('retourFin');
    }
  
  
  
    var btnDecaleGauche = document.querySelector('.arrow.right');
    var btnDecaleDroite = document.querySelector('.arrow.left');
  
    btnDecaleGauche.addEventListener('click', function() {
      decaleGauche();
    });
  
    btnDecaleDroite.addEventListener('click', function() {
      decaleDroite();
    });






    function ajusterProprietesHeader() {
      var monHeader = document.querySelector('header');
      var title = document.querySelector('.title');
      var arrowRight = document.querySelector('.arrow.right');
      var arrowLeft = document.querySelector('.arrow.left');
  
      // Vérifier si la hauteur de l'en-tête est inférieure à 725px
      if (monHeader.clientHeight < 725 && monHeader.innerWidth > 750) {
          title.style.fontSize = '5rem';
          arrowRight.style.bottom = '20px';
          arrowLeft.style.bottom = '20px';
      } 
      else {
        title.style.fontSize = ''; // Réinitialisation de la taille de la police
        arrowRight.style.bottom = ''; // Réinitialisation de la position
        arrowLeft.style.bottom = ''; // Réinitialisation de la position
      }
  
      console.log(monHeader.clientHeight);
  }
  
  // Appeler la fonction une première fois pour initialiser les propriétés
  ajusterProprietesHeader();
  
  // Ajouter un écouteur d'événements pour le redimensionnement de la fenêtre
  window.addEventListener('resize', ajusterProprietesHeader);



});


