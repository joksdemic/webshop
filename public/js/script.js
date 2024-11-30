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

//SCROLL UP
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

//SCROLL DOWN
function scrollToBottom() {
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}

const scrollUpButton = document.querySelector('.scroll-up');
const scrollDownButton = document.querySelector('.scroll-down');

    if (scrollUpButton) {
        scrollUpButton.addEventListener('click', scrollToTop);
    }

    if (scrollDownButton) {
        scrollDownButton.addEventListener('click', scrollToBottom);
    }

//ASSORTMENT PREVIEW
const contentBoxes = document.querySelectorAll('.content-box');
    contentBoxes.forEach(box => {
        const images = box.querySelectorAll('img');
        if (images.length > 0) {
            let currentImageIndex = 0;

            function changeImage() {
                images.forEach(img => img.style.opacity = 0);
                currentImageIndex = (currentImageIndex + 1) % images.length;
                images[currentImageIndex].style.opacity = 1;
            }

            setInterval(changeImage, 3000);
        }
    });

//FORM VALIDATION - contact.php
document.getElementById('formBtn').addEventListener('click', function(event) {
    event.preventDefault(); 

    const firstName = document.querySelector('[placeholder="Ime"]').value;
    const lastName = document.querySelector('[placeholder="Prezime"]').value;
    const email = document.querySelector('[placeholder="email@gmail.com"]').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const message = document.querySelector('[placeholder="..."]').value;

    const nameRegex = /^[A-Za-z\s]+$/; 
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    const phoneRegex = /^[\d\s\+\(\)-]+$/; 

    if (!nameRegex.test(firstName)) {
        alert('Ime moze sadrzati samo slova');
        return;
    }

    if (!nameRegex.test(lastName)) {
        alert('Prezime moze sadrzati samo slova.');
        return;
    }

    if (!emailRegex.test(email)) {
        alert('Molimo unesite email u ispravnom formatu.');
        return;
    }

    const cleanedPhoneNumber = phoneNumber.replace(/[^\d]/g, '');

    if (!phoneRegex.test(phoneNumber)) {
        alert('Broj telefona nije validan! Molimo unesite validan broj.');
        return;
    }

    if (cleanedPhoneNumber.length < 10 || cleanedPhoneNumber.length > 11) {
        alert('Broj telefona mora imati između 10 i 11 cifara!');
        return;
    }

    if (message.trim() === '') {
        alert('Poruka ne sme biti prazna!');
        return;
    }

    if (message.length > 50) {
        alert('Poruka ne sme imati više od 50 karaktera!');
        return;
    }

    alert('Forma je uspešno poslata!');
});

//COUNTRY CALLING CODES VALIDATION - contact.php
const countryCodeSelect = document.getElementById('countryCode');
const phoneNumberInput = document.getElementById('phoneNumber');

if (countryCodeSelect && phoneNumberInput) {
    countryCodeSelect.addEventListener('change', updatePhoneNumber);

    function updatePhoneNumber() {
        const selectedCountryCode = countryCodeSelect.value;
        const phoneNumber = phoneNumberInput.value.replace(/^\+?\d*/, '');

        phoneNumberInput.value = selectedCountryCode + phoneNumber;
    }

    phoneNumberInput.addEventListener('input', function() {
        const selectedCountryCode = countryCodeSelect.value;
        if (!phoneNumberInput.value.startsWith(selectedCountryCode)) {
            updatePhoneNumber(); 
        }
    });
}




