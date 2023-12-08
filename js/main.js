
//video Player
const playerCon = document.querySelector("#player-container");
const player = document.querySelector("video");
const videoControls = document.querySelector("#video-controls");
const playButton = document.querySelector("#play-button");
const pauseButton = document.querySelector("#pause-button");
const stopButton = document.querySelector("#stop-button");
const volumeSlider = document.querySelector("#change-vol");
const fullScreen = document.querySelector("#full-screen");


player.controls = false;
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

//image 3d hover effect gsap
// document.addEventListener("mousemove", function(event) {
//     var width = window.innerWidth,
//     height = window.innerHeight,
//     positionX = (event.clientX/width) - 0.6,
//     positionY = (event.clientY/height) - 0.6;
//     gsap.to(".image_con img", {

//         rotationY: positionX * 50,
//         rotationX: -positionY * 50,
//         ease: "none"

//     });
    
// })

// // bouncing ball button
// let link = document.querySelector(".link");
// let ball = document.querySelector(".ball");
// let hoverTL = gsap.timeline();
// hoverTL.to(ball, {width: "calc(100% + 1.3em}", ease: "Elastic.easeOut(0.25)",
// duration: 2})
// hoverTL.to(ball, {width: "2em", left: "calc(100% +1.5em}", ease: "Elastic.easeOut(0.25)"})