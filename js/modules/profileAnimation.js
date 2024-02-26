// scroll trigger for text in about me section 
const splitTypes = document.querySelectorAll('.text-matrix')

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
})


const lenis = new Lenis()

lenis.on('scroll', (e) => {
console.log(e)
})

function raf(time) {
lenis.raf(time)
requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
