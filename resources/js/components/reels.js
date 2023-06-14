export function initReels(Swiper) {
    const reels = new Swiper(".reels-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            clickable: true,
            el: ".reels-pagination",
        },
        breakpoints: {
            499: {
                slidesPerView: 2,
                spaceBetweenSlides: 10,
            },
            999: {
                slidesPerView: 6,
                spaceBetweenSlides: 47,
            },
        },
    });
}
