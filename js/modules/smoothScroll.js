window.addEventListener('load', function () {
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (scrollTo) {
            scrollTo.preventDefault();

            var aboutMe = this.getAttribute('href').substring(1);

            if (!aboutMe || aboutMe === '') {
                aboutMe = 'about-me';
            }

            var targetElement = document.getElementById(aboutMe);

            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start',
                    inline: 'nearest',
                    duration: 1000,
                });
            }
        });
    });
});
