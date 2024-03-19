gsap.from('.descrExpo', {
    duration: 6, 
    opacity: 0,
        toggleActions: 'restart none none none' 
    
});

gsap.from('.title', {
    duration: 6, 
    opacity: 0,
        toggleActions: 'restart none none none',
        delay: 0.2
    
});

gsap.from('.titleSection, .painterDescr', { 
    duration: 4,
    opacity: 0,
    scrollTrigger: {
        trigger: ".section1",
        toggleActions: 'restart none none none',
        delay: 0.2
    } 
});

// gsap.from('.titleContainer, .painterDescr', { 
//     duration: 4,
//     opacity: 0,
//     scrollTrigger: {
//         trigger: ".section2",
//         toggleActions: 'none none none none',
//         delay: 0.2
//     } 
// });

