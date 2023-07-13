document.addEventListener("DOMContentLoaded", (evt) => {
    const allTogglers = document.querySelectorAll(".mob-list__button");

    allTogglers.forEach((elem) => {
        elem.addEventListener(
            "click",
            (evt) => {
                const menuContent = evt.target
                    .closest(".mob-list__item")
                    .querySelector(".mob-list__ul");
                menuContent.classList.toggle("mob-list__ul--active");
                const icon = evt.target
                    .closest(".mob-list__item")
                    .querySelector(".mob-list__img");
                icon.classList.toggle("icon--active");
            },
            false
        );
    });
    const cityToggler = document.querySelector(".mgeo__button");
    const cityList = document.querySelector(".mgeo-city__list");
    cityToggler.addEventListener("click", (evt) => {
        cityList.classList.toggle("mgeo-city__list--active");
    });
});
