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

document.addEventListener("DOMContentLoaded", () => {
        const loaderContainer = document.querySelector(".page-transition-container");
        const preloader = document.querySelector('.preloader-page');
        preloader.style.animationPlayState = 'paused';
        loaderContainer.style.display = 'none';
});

