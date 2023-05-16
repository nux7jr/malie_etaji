document.addEventListener("DOMContentLoaded", () => {
    const allPlaceholders = [...document.querySelectorAll(".auto-play")];
    allPlaceholders.forEach((element) => {
        element.addEventListener("mouseover", (evt) => {
            const video = evt.target.querySelector(".auto-play__video");
            if (video !== null) {
                video.removeAttribute("hidden");
                // video.play();
            }
        });
    });
    allPlaceholders.forEach((element) => {
        element.addEventListener("mouseleave", (evt) => {
            const video = evt.target.querySelector(".auto-play__video");
            // video.pause();
            video.setAttribute("hidden", "hidden");
        });
    });
});
