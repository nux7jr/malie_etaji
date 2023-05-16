document.addEventListener("DOMContentLoaded", () => {
    const allPlaceholders = [...document.querySelectorAll(".auto-play")];
    allPlaceholders.forEach((element) => {
        element.addEventListener("click", (evt) => {
            console.log(evt.target);
        });
    });
});
console.log("ONLY FOR HOME!");
