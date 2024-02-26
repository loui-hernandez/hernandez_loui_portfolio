// bouncingBall.js
import { gsap } from "gsap";

export function initializeBouncingBall() {
    let bttns = document.querySelectorAll(".bttn");

    bttns.forEach(bttn => {
        let ball = bttn.querySelector(".ball");
        let hoverTL = gsap.timeline();
        hoverTL.pause();

        hoverTL.to(ball, { width: "calc(100% + 1.3em)", ease: "Elastic.easeOut(0.25)", duration: 0.5 });
        hoverTL.to(ball, { width: "2em", left: "calc(100% - 1.45em)", ease: "Elastic.easeOut(0.25)", duration: 0.5 });

        bttn.addEventListener("mouseenter", () => {
            hoverTL.play();
        });

        bttn.addEventListener("mouseleave", () => {
            hoverTL.reverse();
        });
    });
}
