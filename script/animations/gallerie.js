// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.descrGallerie', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none' 
   
});

gsap.from('.title', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    delay: 0.2
    
});

gsap.from('.swiper', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    delay: 0.2,
    scrollTrigger: {
        trigger: ".container",
        toggleActions: 'restart none none none',      
    } 
    
});