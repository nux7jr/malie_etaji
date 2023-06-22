export function initReels(Swiper) {
    const reels = new Swiper(".reels-swiper", {
        slidesPerView: 1,
        spaceBetween: 47,
        lazy: true,
        pagination: {
            clickable: true,
            el: ".reels-pagination",
        },
        breakpoints: {
            499: {
                slidesPerView: 1,
                spaceBetweenSlides: 10,
            },
            999: {
                slidesPerView: 2,
                spaceBetweenSlides: 27,
            },
            1440: {
                slidesPerView: 4,
                spaceBetweenSlides: 27,
            },
            1690: {
                slidesPerView: 6,
                spaceBetweenSlides: 47,
            },
        },
    });
}
