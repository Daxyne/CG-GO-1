/* Review Carousel Start */
const carousel = document.querySelector('.csgo-HomeReview-carousel');
const leftArrow = document.querySelector('.csgo-HomeReview-left-arrow');
const rightArrow = document.querySelector('.csgo-HomeReview-right-arrow');
const cardWidth = 311; // Adjust this value according to your card width

let cardIndex = 0;

function updateCarousel() {
    const translateXValue = -cardIndex * cardWidth;
    carousel.style.transform = `translateX(${translateXValue}px)`;
}

if (leftArrow) {
    leftArrow.addEventListener('click', () => {
        if (cardIndex > 0) {
            cardIndex--;
            updateCarousel();
        }
    });
}

if (rightArrow) {
    rightArrow.addEventListener('click', () => {
        const maxIndex = Math.floor(carousel.scrollWidth / cardWidth) - 3;
        if (cardIndex < maxIndex) {
            cardIndex++;
            updateCarousel();
        }
    });
}

/* Review Carousel End */