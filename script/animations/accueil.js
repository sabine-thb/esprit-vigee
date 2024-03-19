// Enregistrer le plugin ScrollTrigger avec GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.from('.descrExpo', {
    duration: 3, 
    opacity: 0,
        toggleActions: 'restart none none none' 
    
});

gsap.from('.title', {
    duration: 3, 
    opacity: 0,
    toggleActions: 'restart none none none',
    
});

gsap.from('.titleSection, .painterDescr', { 
    duration: 3,
    opacity: 0,
    delay: 0.2,
    scrollTrigger: {
        trigger: ".section1",
        toggleActions: 'restart none none none',
        
    } 
});

gsap.from('.card1, .card2, .card3', { 
    duration: 3,
    opacity: 0,
    stagger: 0.5,
    delay: 0.2,
    scrollTrigger: {
        trigger: ".section2",
        toggleActions: 'restart none none none',
        
    } 
});

gsap.from('.flexContainer', { 
    duration: 3,
    opacity: 0,
    delay: 0.2,
    scrollTrigger: {
        trigger: ".section3",
        toggleActions: 'restart none none none',
       
    } 
});

