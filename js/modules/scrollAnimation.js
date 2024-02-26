//scroll animation for gallery/projects
gsap.utils.toArray('.animate-projects .project').forEach((project, index) => {
    gsap.from(project, {
        scrollTrigger: {
            trigger: project,
            start: 'top 70%',
            end: 'top 40%',
            scrub: true,
            markers: false,
        },
        x: index % 2 === 0 ? -100 : 150, 
        opacity: 0,
        stagger: 0.3, 
    });
});

