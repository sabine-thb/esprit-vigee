// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);


gsap.from('.title', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    
});