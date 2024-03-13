function collecterDonnees(etape) {
    var donnees = {};
    var champs = document.getElementById(etape).querySelectorAll('input, select, textarea');
    champs.forEach(function(champ) {
        if (champ.type === 'radio' && champ.checked) {
            donnees[champ.name] = champ.value;
        } else if (champ.type !== 'radio') {
            donnees[champ.name] = champ.value;
        }
    });

    return donnees;
}


// Fonction pour afficher les données collectées
function afficherDonnees(donnees) {
    console.log(donnees);
}



function passerEtape(etapeActuelle, etapeSuivante) {
    var donnees = collecterDonnees(etapeActuelle);

    // Masquer l'étape actuelle
    document.getElementById(etapeActuelle).style.display = 'none';

    // Afficher l'étape suivante
    document.getElementById(etapeSuivante).style.display = 'block';

    // Afficher les données collectées
    afficherDonnees(donnees);

    // Mettre à jour les éléments HTML avec les données collectées
    if (etapeSuivante === 'etape2') {
        document.getElementById('dateChoisie').textContent = donnees['date'];
        document.getElementById('horaireChoisi').textContent = donnees['horaire'];
        document.querySelector('.date').style.display = 'block'; // Afficher l'élément avec la classe .date
    } else if (etapeSuivante === 'etape3') {
        document.getElementById('nombreBillets').textContent = donnees['number'];
        document.querySelector('.nbBillets').style.display = 'block'; // Afficher l'élément avec la classe .nbBillets
    }
}

function afficherEtape(etapeEnCours) {
    // Masquer toutes les étapes
    var etapes = document.querySelectorAll('.etape');
    etapes.forEach(function(etapeEnCours) {
        etapeEnCours.style.display = 'none';
    });

    console.log(etapeEnCours);

    // Afficher l'étape spécifiée
    document.getElementById(etapeEnCours).style.display = 'block';
}





document.addEventListener("DOMContentLoaded", function() {


    var boutonsEtapes = document.querySelectorAll('.navBilleterie button');

    console.log(boutonsEtapes.length);

   // Ajouter la classe active au premier bouton au chargement de la page
    boutonsEtapes[0].classList.add('active');

    // Ajouter un gestionnaire d'événements à chaque bouton
    boutonsEtapes.forEach(function(bouton) {
        bouton.addEventListener('click', function(event) {
            // Retirer la classe active de tous les boutons
            boutonsEtapes.forEach(function(bouton) {
                bouton.classList.remove('active');
            });

            // Ajouter la classe active au bouton cliqué
            bouton.classList.add('active');
        });
    });


        var validOne = document.querySelector('.valid.one');

        var validTwo = document.querySelector('.valid.two');
    
        // Ajouter un gestionnaire d'événements à l'élément .valid .one
        validOne.addEventListener('click', function() {
            // Enlever la classe active du premier bouton
            boutonsEtapes[0].classList.remove('active');
            // Ajouter la classe active au deuxième bouton
            boutonsEtapes[1].classList.add('active');
        });

        validTwo.addEventListener('click', function() {
            // Enlever la classe active du premier bouton
            boutonsEtapes[1].classList.remove('active');
            // Ajouter la classe active au deuxième bouton
            boutonsEtapes[2].classList.add('active');
        });



        var horaires = document.querySelectorAll('input[name="horaire"]');

        // Ajoutez un gestionnaire d'événements à chaque élément
        horaires.forEach(function(horaire) {
            horaire.addEventListener('click', function() {
                // Affichez la valeur de l'élément sélectionné dans la console
                console.log(horaire.value);
            });
        });



        //Je mets en place le fait d'incrementer /décrementer le nombre de billets

        function incrementer() {
            var increment=document.querySelector('.increment');
            var input = document.getElementById('number');
      
            increment.addEventListener('click', function(){
              input.stepUp(1);
            })
            
          }
          
          function decrementer() {
            var decrement=document.querySelector('.decrement');
            var input = document.getElementById('number');
      
            decrement.addEventListener('click', function(){
              input.stepDown(1);
            })
            
          }
      
          incrementer();
          decrementer();


    

});



    
