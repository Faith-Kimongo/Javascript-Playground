// carousel
import { Carousel } from 'flowbite';

const carousel = new Carousel(items, options);

// goes to the next (right) slide
carousel.next()

// goes to the previous (left) slide
carousel.prev()

// jumps to the 3rd position (position starts from 0)
carousel.slideTo(2)

// starts or resumes the carousel cycling (automated sliding)
carousel.cycle()

// pauses the cycling (automated sliding)
carousel.pause()


const $prevButton = document.getElementById('data-carousel-prev');
const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();
});