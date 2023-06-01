export function initProjects(Swiper) {
    const project_item = new Swiper(".project-swiper", {
        pagination: {
            clickable: true,
            el: ".pagination-swiper",
        },
    });

    // document.addEventListener("DOMContentLoaded", (evt) => {
    //     const allProjectsAraeHover = document.querySelectorAll(
    //         ".project-item__info"
    //     );
    //     allProjectsAraeHover.forEach((element) => {
    //         element.addEventListener("mouseover", (evt) => {

    //         });
    //         element.addEventListener("mouseleave", (evt) => {

    //         });
    //     });
    // });
}
