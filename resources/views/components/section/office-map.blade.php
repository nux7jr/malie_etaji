@push('head')
@once
@vite('resources/css/components/office-map.css')
@vite('resources/js/components/office-map.js')
@endonce
@endpush


<section class="office-map">
  <h1 class="office-map__heading">
    {{__('Контакты')}}
  </h1>
  <div class="office-map__container">
    <div style="position:relative;overflow:hidden;"><a
        href="https://yandex.ru/maps/org/malyye_etazhi/181477490988/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:0px;">Малые этажи</a><a
        href="https://yandex.ru/maps/62/krasnoyarsk/category/construction_company/184107633/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительная компания в Красноярске</a><a
        href="https://yandex.ru/maps/62/krasnoyarsk/category/prefabricated_buildings/184107425/?utm_medium=mapframe&utm_source=maps"
        style="color:#eee;font-size:12px;position:absolute;top:28px;">Быстровозводимые здания в Красноярске</a><iframe
        id="map-frame"
        src="https://yandex.ru/map-widget/v1/?ll=92.923116%2C56.036678&mode=search&oid=181477490988&ol=biz&sctx=ZAAAAAgBEAAaKAoSCQ9fJoqQNldAERnG3SBaAUxAEhIJTl5kAn6N3z8RkzZV98jmxD8iBgABAgMEBSgKOABAPkgBagJydZ0BzcxMPaABAKgBAL0ByTL3MsIBBqyCm4ekBeoBAPIBAPgBAIICFdC80LDQu9GL0LUg0Y3RgtCw0LbQuIoCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=92.923116%2C56.036678&sspn=0.015407%2C0.005099&text=%D0%BC%D0%B0%D0%BB%D1%8B%D0%B5%20%D1%8D%D1%82%D0%B0%D0%B6%D0%B8&z=17"
        width="100%" height="700" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
  </div>
</section>