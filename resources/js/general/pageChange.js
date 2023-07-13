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
            document
                .querySelector(".page-transition-container")
                .classList.add("page-transition-container--active");
            document
                .querySelector(".page-transition-container__heading")
                .classList.add("page-transition-container__heading--active");
            document
                .querySelector(".page-transition-loader")
                .classList.add("page-transition-loader--active");
            setTimeout(() => {
                window.location.href = currLink.href;
            }, 600);
        }
    });
});
