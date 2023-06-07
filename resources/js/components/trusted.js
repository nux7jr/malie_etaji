export function initTrusted(Swiper) {
    const trusted = new Swiper(".trusted-swiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            clickable: true,
            el: ".trusted-pagination",
        },
        breakpoints: {
            499: {
                slidesPerView: 1,
                spaceBetweenSlides: 10,
            },
            999: {
                slidesPerView: 6,
                spaceBetweenSlides: 10,
            },
        },
    });
}
