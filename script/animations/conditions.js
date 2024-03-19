// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.title', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none' 
    
});

var paragraphe = document.querySelectorAll('.paragraphe');

// Itérer sur chaque élément et les faire apparaître un par un
paragraphe.forEach(function(paragraphe, index) {
    gsap.from(paragraphe, {
        duration: 5,
        opacity: 0,
        delay: index * 0.6, // Délai progressif basé sur l'index de l'élément
        ease: "power2.out", // Facultatif : ajoute une courbe d'animation pour un effet plus fluide
        stagger: 0.5,
        scrollTrigger: {
            trigger: "section",
            toggleActions: 'restart none none none',
            
        } 
    });
});