import "fslightbox";

export function initFeedback(Swiper) {
    const feedback = new Swiper(".feedback-swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".feedback-button-next",
            prevEl: ".feedback-button-prev",
        },
        breakpoints: {
            999: {
                slidesPerView: 3,
                spaceBetweenSlides: 60,
            },
        },
    });
}
