// profileAnimation.js
import { gsap, ScrollTrigger } from "gsap/all";

export function animateProfileSection() {
    const profileSection = document.querySelector('#profile');
    const profileElements = profileSection.querySelectorAll('.grid-con > *');

    gsap.from(profileElements, {
        opacity: 0,
        stagger: 0.2,
        duration: 2.5,
        ease: 'elastic.out(1,0.5)',
        y: '100%',
    });
}

export function animateTextInAboutMeSection() {
    const splitTypes = document.querySelectorAll('.text-matrix');

    splitTypes.forEach((char,i) => {

        const text = new SplitType(char, { types: 'chars'})

        gsap.from(text.chars, {
            scrollTrigger: {
                trigger: char,
                start: 'top 80%',
                end: 'top 60%',
                scrub: true,
                markers: false,
            },
            y: '100%',
            opacity: 0,
            stagger: 0.05,

        })
    });
}

export function initializeScrollAnimationForProjects() {
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
}
