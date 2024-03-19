// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.descrContact', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none' 
    
});

gsap.from('.title', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',

});

gsap.from('.imagesTab', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    delay: 0.2
    
});

gsap.from('.imgVR, .textContact, .textCreateurs', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    delay: 0.2,
    scrollTrigger: {
        trigger: ".flexContainer1",
        toggleActions: 'restart none none none',
        
    } 
    
});



var members = document.querySelectorAll('.member');

// Itérer sur chaque élément et les faire apparaître un par un
members.forEach(function(member, index) {
    gsap.from(member, {
        duration:8,
        opacity: 0,
        delay: index * 0.6, // Délai progressif basé sur l'index de l'élément
        ease: "power2.out", // Facultatif : ajoute une courbe d'animation pour un effet plus fluide
        scrollTrigger: {
            trigger: ".equipe",
            toggleActions: 'restart none none none',
            
        } 
    });
});