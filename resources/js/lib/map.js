function init() {
    var myMap = new ymaps.Map("map-container-footer", {
        center: [56.036678, 92.923116],
        zoom: 13,
        controls: [],
    });
    var searchControl = new ymaps.control.SearchControl({
        options: {
            provider: "yandex#search",
        },
    });
    myMap.controls.add(searchControl);

    searchControl.search("Малые этажи");
}
ymaps.ready(init);
