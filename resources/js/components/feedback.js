import "fslightbox";

export function initFeedback(Swiper) {
    const feedback = new Swiper(".feedback-swiper", {
        slidesPerView: 3,
        spaceBetween: 50,

        navigation: {
            nextEl: ".feedback-button-next",
            prevEl: ".feedback-button-prev",
        },
    });
}
