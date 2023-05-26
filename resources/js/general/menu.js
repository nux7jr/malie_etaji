const sub_menu_links = [...document.querySelectorAll(".submenu")];
const main_menu = document.querySelector(".header__links");

const logo = document.querySelector(".header__logo");
const close_button = document.querySelectorAll(".header__goback");

sub_menu_links.forEach((element) => {
    element.addEventListener("click", (evt) => {
        const curr__submenu = evt.target.dataset.menu;
        const submenu = document.querySelector(
            `.header__submenu--${curr__submenu}`
        );
        logo.classList.add("visually-hidden");
        main_menu.classList.add("visually-hidden");
        submenu.style.display = "flex";
    });
});

close_button.forEach((element) => {
    element.addEventListener("click", (evt) => {
        evt.target.parentNode.parentNode.style.display = "none";
        logo.classList.remove("visually-hidden");
        main_menu.classList.remove("visually-hidden");
    });
});
