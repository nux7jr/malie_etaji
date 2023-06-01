export function initTrusted(Swiper) {
    const trusted = new Swiper(".trusted-swiper", {
        slidesPerView: 6,
        spaceBetween: 10,
        pagination: {
            clickable: true,
            el: ".trusted-pagination",
        },
    });
}
