//SLIDER
document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide');

    if (slides && totalSlides.length > 0) {
        let currentSlide = 0;

        function changeSlide(direction) {
            currentSlide += direction;

            if (currentSlide < 0) {
                currentSlide = totalSlides.length - 1;
            } else if (currentSlide >= totalSlides.length) {
                currentSlide = 0;
            }

            const offset = -currentSlide * 100;
            slides.style.transform = `translateX(${offset}%)`;

            updateButtonVisibility();
        }

        function autoChangeSlide() {
            changeSlide(1);
        }

        setInterval(autoChangeSlide, 2000);

        function updateButtonVisibility() {
            const previousButton = document.querySelector('.previous');
            const nextButton = document.querySelector('.next');
            if (previousButton) {
                previousButton.disabled = currentSlide === 0;
            }
            if (nextButton) {
                nextButton.disabled = currentSlide === totalSlides.length - 1;
            }
        }

        const prevButton = document.querySelector('.previous');
        const nextButton = document.querySelector('.next');

        if (prevButton) {
            prevButton.addEventListener('click', () => changeSlide(-1));
        }
        if (nextButton) {
            nextButton.addEventListener('click', () => changeSlide(1));
        }

        updateButtonVisibility();
    } else {
        console.error("Slides not found in the DOM.");
    }
});







