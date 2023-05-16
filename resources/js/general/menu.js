const sub_menu_links = [...document.querySelectorAll(".submenu")];
const main_menu = document.querySelector(".header__links");
const first_sub_menu = document.querySelector(".header__submenu--first");
const logo = document.querySelector(".header__logo");
const close_button = document.querySelectorAll(".header__goback");

sub_menu_links.forEach((element) => {
    element.addEventListener("click", (evt) => {
        logo.classList.add("visually-hidden");
        main_menu.classList.add("visually-hidden");
        first_sub_menu.style.display = "flex";
    });
});

close_button.forEach((element) => {
    element.addEventListener("click", (evt) => {
        evt.target.parentNode.parentNode.style.display = "none";
        logo.classList.remove("visually-hidden");
        main_menu.classList.remove("visually-hidden");
    });
});
