import "fslightbox";
export function initCertificates(Swiper) {
    const certificates = new Swiper(".certificates-swiper", {
        slidesPerView: 6,
        spaceBetween: 50,
        pagination: {
            el: ".certificates-pagination",
            clickable: true,
        },
    });
}
