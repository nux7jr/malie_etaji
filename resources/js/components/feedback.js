export function initFeedback(Swiper) {
    const feedback = new Swiper(".feedback-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,

        navigation: {
            nextEl: ".feedback-button-next",
            prevEl: ".feedback-button-prev",
        },
    });
}
