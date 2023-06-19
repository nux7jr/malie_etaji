const sub_menu_links = [...document.querySelectorAll(".submenu")];
const main_menu = document.querySelector(".header__links");

const logo = document.querySelector(".header__logo");
const close_button = document.querySelectorAll(".header__goback");

const geo = document.querySelector(".geo__button");
const hidden_city = document.querySelector(".hidden-city");

sub_menu_links.forEach((element) => {
    element.addEventListener("click", (evt) => {
        const curr__submenu = evt.target.dataset.menu;
        const submenu = document.querySelector(
            `.header__submenu--${curr__submenu}`
        );
        logo.classList.add("visually-hidden");
        main_menu.style.transform = "translate(-50px, 0px)";
        main_menu.style.opacity = "0";
        setTimeout(() => {
            submenu.style.display = "flex";
            submenu.style.opacity = "1";
            submenu.style.transform = "translate(0px, 0px)";
            setTimeout(() => {}, 500);
            main_menu.classList.add("visually-hidden");
        }, 400);
    });
});

close_button.forEach((element) => {
    element.addEventListener("click", (evt) => {
        evt.target.parentNode.parentNode.style.opacity = "0";
        evt.target.parentNode.parentNode.style.transform =
            "translate(-100px, 0px)";
        setTimeout(() => {
            evt.target.parentNode.parentNode.style.display = "none";
        }, 500);
        setTimeout(() => {
            main_menu.style.opacity = "1";
            main_menu.style.transform = "translate(0px, 0px)";
            main_menu.classList.remove("visually-hidden");
            logo.classList.remove("visually-hidden");
        }, 500);
    });
});

geo.addEventListener("click", (evt) => {
    hidden_city.classList.toggle("hidden_city--active")
});
