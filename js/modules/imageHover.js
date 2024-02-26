// image 3d hover effect gsap
document.addEventListener("mousemove", function(slanting) {
    var width = window.innerWidth,
        height = window.innerHeight,
        positionX = (slanting.clientX/width) - 0.6,
        positionY = (slanting.clientY/height) - 0.6;
        gsap.to(".image_con img", {
    
            rotationY: positionX * 50,
            rotationX: -positionY * 50,
            ease: "none"
    
        });
        
    })