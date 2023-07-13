// document.addEventListener("load", () => {
// })
const allLink = [...document.getElementsByTagName("a")];
function getParentByTagName(node, tagname) {
    var parent;
    if (node === null || tagname === "") return;
    parent = node.parentNode;
    tagname = tagname.toUpperCase();

    while (parent.tagName !== "HTML") {
        if (parent.tagName === tagname) {
            return parent;
        }
        parent = parent.parentNode;
    }
    return parent;
}
const pageState = {
    contentLoad: false,
};
const _INTERVAL = 500;
const _TIMEOUT_LOADER = 4500;

const loaderContainer = document.querySelector(".page-transition-container");
const loaderHeading = document.querySelector(
    ".page-transition-container__heading"
);
const loaderIcon = document.querySelector(".preloader-page");

const timerLoad = setTimeout(() => {
    loaderContainer.classList.add("page-transition-container--active");

    loaderHeading.classList.add("page-transition-container__heading--active");

    loaderIcon.classList.add("preloader-page--active");

    clearTimeout(timerLoad);
}, _TIMEOUT_LOADER);

const intervalLoad = setInterval((evt) => {
    if (pageState.contentLoad) {
        loaderContainer.classList.add("page-transition-container--active");

        loaderHeading.classList.add(
            "page-transition-container__heading--active"
        );

        loaderIcon.classList.add("preloader-page--active");

        clearInterval(intervalLoad);
    }
}, _INTERVAL);
document.addEventListener("DOMContentLoaded", (evt) => {
    pageState.contentLoad = true;
});

allLink.forEach((elem) => {
    elem.addEventListener("click", (evt) => {
        let currLink;
        if (evt.target.tagName !== "A") {
            currLink = getParentByTagName(evt.target, "A");
        } else {
            currLink = evt.target;
        }
        if (
            currLink.href &&
            currLink.getAttribute("href")[0] !== "#" &&
            currLink.getAttribute("data-fslightbox") === null
        ) {
            evt.preventDefault();
            window.location.href = currLink.href;
        }
    });
});
