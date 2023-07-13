function init() {
    var myMap = new ymaps.Map("map-container-footer", {
        center: [56.036678, 92.923116],
        zoom: 13,
        controls: [],
    });
    // var searchControl = new ymaps.control.SearchControl({
    //     options: {
    //         provider: "yandex#search",
    //     },
    // });
    // myMap.controls.add(searchControl);

    // searchControl.search("Малые этажи");

    myMap.controls.remove('zoomControl');
    myMap.geoObjects.add(new ymaps.Placemark([56.036623, 92.923197], {
        balloonContent: '<a class="balloonContent" href="https://yandex.ru/maps/org/malyye_etazhi/181477490988/?ll=92.923763%2C56.036817&z=16.8">Малые Этажи</a>'
    }, {
        preset: 'islands#redIcon'
    }))
    }

ymaps.ready(init);
