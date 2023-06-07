import "fslightbox";
export function initCertificates(Swiper) {
    const certificates = new Swiper(".certificates-swiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        cssMode: true,
        pagination: {
            el: ".certificates-pagination",
            clickable: true,
        },
        breakpoints: {
            740: {
                slidesPerView: 3,
                spaceBetweenSlides: 60,
            },
            1440: {
                slidesPerView: 6,
                spaceBetweenSlides: 60,
            },
        },
    });
}
