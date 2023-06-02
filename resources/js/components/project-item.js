export function initProjects(Swiper) {
    const project_item = new Swiper(".project-swiper", {
        pagination: {
            clickable: true,
            el: ".pagination-swiper",
        },
    });

    document.addEventListener("DOMContentLoaded", (evt) => {
        const allProjectsAraeHover = document.querySelectorAll(
            ".project-item__info"
        );
        const allArticle = document.querySelectorAll(".project-item");
        allProjectsAraeHover.forEach((element) => {
            element.addEventListener("mouseover", (evt) => {
                const fo = evt.target.closest(".project-item");
                fo.classList.add("project-item--active");
                const baz = fo.querySelectorAll(".project-slide");
                const bar = fo.querySelector(".project-swiper");
                bar.classList.add("project-slide--acitve");
                baz.forEach((elem) => {
                    elem.classList.add("project-slide--acitve");
                });
            });
        });
        allArticle.forEach((element) => {
            element.addEventListener("mouseleave", (evt) => {
                const fo = evt.target.closest(".project-item");
                fo.classList.remove("project-item--active");
                const baz = fo.querySelectorAll(".project-slide");
                const bar = fo.querySelector(".project-swiper");
                bar.classList.remove("project-slide--acitve");
                baz.forEach((elem) => {
                    elem.classList.remove("project-slide--acitve");
                });
            });
        });
    });
}
