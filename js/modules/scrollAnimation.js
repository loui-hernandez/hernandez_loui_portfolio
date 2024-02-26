// scrollAnimation.js
import { Lenis } from "lenis";

const lenis = new Lenis();

lenis.on('scroll', (e) => {
    console.log(e);
});

export function requestAnimationFrameForLenis() {
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
}
