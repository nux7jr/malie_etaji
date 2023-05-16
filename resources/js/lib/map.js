import ymaps from "ymaps";

document.addEventListener("DOMContentLoaded", async function () {
    // const mapParent = document.querySelector(".map-container");
    // try {
    //     const maps = await ymaps.load();
    //     const mapContainer = document.createElement("div");

    //     mapContainer.style.height = "100%";
    //     mapContainer.style.width = "100%";

    //     mapParent.appendChild(mapContainer);
    //     const myMap = new maps.Map(mapContainer, {
    //         center: [-8.369326, 115.166023],
    //         zoom: 8,
    //     });
    //     myMap.behaviors.disable("scrollZoom");
    //     myMap.controls.remove("geolocationControl");
    //     myMap.controls.remove("trafficControl");
    //     myMap.controls.remove("typeSelector");
    //     myMap.controls.remove("fullscreenControl");
    //     myMap.controls.remove("searchControl");
    // } catch (error) {
    //     console.error("Something went wrong", error);
    // }
    // footer map
    const mapParentFooter = document.querySelector(".map-container-footer");
    try {
        const maps = await ymaps.load();
        const mapContainer = document.createElement("div");

        mapContainer.style.height = "100%";
        mapContainer.style.width = "100%";

        mapParentFooter.appendChild(mapContainer);
        const myMap = new maps.Map(mapContainer, {
            center: [-8.369326, 115.166023],
            zoom: 8,
        });
        myMap.behaviors.disable("scrollZoom");
        myMap.controls.remove("geolocationControl");
        myMap.controls.remove("trafficControl");
        myMap.controls.remove("typeSelector");
        myMap.controls.remove("fullscreenControl");
        myMap.controls.remove("searchControl");
    } catch (error) {
        console.error("Something went wrong", error);
    }
});
