
//video Player
const playerCon = document.querySelector("#player-container");
const player = document.querySelector("video");
const videoControls = document.querySelector("#video-controls");
const playButton = document.querySelector("#play-button");
const pauseButton = document.querySelector("#pause-button");
const stopButton = document.querySelector("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector("#full-screen");

player.controls = true;
videoControls.classList.remove('hidden');

function playVideo() {
    player.play();
}

function pauseVideo() {
    player.pause();
}

function stopVideo() {
    player.pause();
    player.currentTime = 1;
} 

function changeVolume() {
    player.volume = volumeSlider.value;
    console.log(volumeSlider.value);
}

function toggleFullScreen() {
    if(document.fullscreenElement) {
        document.exitFullscreen();
    } else if (document.webkitFullscreenElement) {
        document.webkitExitFullscreen();
    } else if (playerCon.webkitRequestFullscreen) {
        playerCon.webkitRequestFullscreen();
    } else {
        playerCon.requestFullscreen();
    }
}

function hideControls() {
    if(player.paused) {
        return;
    }
    videoControls.classList.add('hide');
}

function showControls() {
    videoControls.classList.remove('hide');
}

playButton.addEventListener("click", playVideo);
pauseButton.addEventListener("click", pauseVideo);
stopButton.addEventListener("click", stopVideo);
volumeSlider.addEventListener("change", changeVolume);
fullScreen.addEventListener("click", toggleFullScreen);
videoControls.addEventListener('mouseenter',showControls);
videoControls.addEventListener('mouseleave', hideControls);
player.addEventListener('mouseenter', showControls);
player.addEventListener('mouseleave', hideControls);

// image 3d hover effect gsap
document.addEventListener("mousemove", function(event) {
var width = window.innerWidth,
    height = window.innerHeight,
    positionX = (event.clientX/width) - 0.6,
    positionY = (event.clientY/height) - 0.6;
    gsap.to(".image_con img", {

        rotationY: positionX * 50,
        rotationX: -positionY * 50,
        ease: "none"

    });
    
})

// bouncing ball button

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


gsap.registerPlugin(ScrollTrigger)

// Animation for #profile section on page load
const profileSection = document.querySelector('#profile');
const profileElements = profileSection.querySelectorAll('.grid-con > *');

gsap.from(profileElements, {
    opacity: 0,
    stagger: 0.2, 
    duration: 2.5, 
    ease: 'elastic.out(1,0.5)', 
    y: '100%',
});

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
