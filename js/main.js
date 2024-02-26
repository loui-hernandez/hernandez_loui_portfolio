// main.js
import { initializeVideoPlayer } from './modules/videoPlayer.js';
import { initializeBouncingBall } from './modules/bouncingBall.js';
import { animateProfileSection, animateTextInAboutMeSection, initializeScrollAnimationForProjects } from './modules/profileAnimation.js';
import { requestAnimationFrameForLenis } from './modules/scrollAnimation.js';
import { initializeSmoothScroll } from './modules/smoothScroll.js';
import { gsap } from "gsap";

// Initialize video player
initializeVideoPlayer();

// Other initializations
initializeBouncingBall();
animateProfileSection();
animateTextInAboutMeSection();
initializeScrollAnimationForProjects();
requestAnimationFrameForLenis();
initializeSmoothScroll();

gsap.registerPlugin(ScrollTrigger);
